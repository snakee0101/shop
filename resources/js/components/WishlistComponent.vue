<template>
    <div class="card mb-5">
        <div class="modal fade" :id="'move_wishlist_modal_' + wishlist_object.id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Move selected products to another wishlist</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="wishlist_name">Name of new wishlist</label><br>
                            <select class="form-control form-select" id="wishlist_name">
                                <option v-for="w in other_wishlists">{{ w.name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" @click="move_to_wishlist()">Confirm</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-header d-flex align-content-center" :class="wishlist.is_active ? 'bg-dark text-white font-weight-bold' : ''">
            <p class="d-inline-block m-0 pt-2 mr-auto" v-if="is_renaming">
                <input type="text" v-model="new_name">
                <button class="btn btn-success btn-sm" @click="confirm_rename()">Ok</button>
                <button class="btn btn-danger btn-sm" @click="is_renaming = false">Cancel</button>
            </p>
            <p class="d-inline-block m-0 pt-2 mr-auto" v-else>
                {{ wishlist.name }} <span v-if="wishlist.is_active"> (Default)</span>
            </p>
            <div class="d-inline-block" v-if="user_object.id">
                <button class="btn btn-danger" @click="delete_wishlist()">Delete</button>
                <button class="btn btn-warning" @click="start_rename()">Rename</button>
                <button class="btn btn-info" @click="setDefault()">Set as default</button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="d-flex align-content-center mb-3 p-4">
                <div class="d-inline-block flex-grow-1" v-if="user_object.id">
                    <button class="btn btn-success" @click="selectAll()" v-text="all_selected ? 'Deselect All' : 'Select All'"></button>
                    <button class="btn btn-warning" data-toggle="modal" :data-target="'#move_wishlist_modal_' + wishlist_object.id">Move</button>
                    <button class="btn btn-danger" @click="remove_from_wishlist()">Delete</button>
                    <button class="btn btn-info" @click="copyURL()">Copy URL</button>
                </div>
                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort by
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Date added</a>
                            <a class="dropdown-item" href="#">Expensive first</a>
                            <a class="dropdown-item" href="#">Cheap first</a>
                            <a class="dropdown-item" href="#">With discount only</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex p-4">
                <product-card-component v-for="product in wishlist_object.products_json"
                                        :key="product.id"
                                        :user="JSON.stringify(user_object)"
                                        :product="JSON.stringify(product)"
                                        :wishlist_object="wishlist"
                                        :in-favorites="true"
                                        class="m-2">

                </product-card-component>
            </div>
            <div class="card-footer d-flex flex-row-reverse py-2">
                <button class="btn btn-success align-self-center">
                    Add To Cart
                </button>
                <div class="mr-4">
                    <p class="m-0">Total</p>
                    <p class="m-0 font-weight-bold" style="font-size: 1.5em">${{ total }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "WishlistComponent",
    props: ['wishlist', 'wishlists', 'user', 'url'],
    created() {
        window.events.$on('removed_product_from_wishlist', this.remove_from_wishlist);
        window.events.$on('toggled_product_wishlist_selection', this.save_selection);
    },
    mounted() {
        this.other_wishlists = this.wishlists.filter( wishlist => wishlist.id !== this.wishlist_object.id );
    },
    data() {
        return {
          'wishlist_object' : this.wishlist,
          'user_object' : this.user,
          'selected_product_ids' : [],
          'all_selected' : false,
          'is_renaming' : false,
          'new_name' : this.wishlist.name,
          'other_wishlists' : {}
        };
    },
    computed: {
        total() {
            if(this.selected_product_ids.length === 0)
                return this.wishlist_object.products_json.map(product => product.price)
                                                         .reduce( (prev_price, current_price) => prev_price + current_price, 0);
            else
                return this.wishlist_object.products_json.filter( product => this.selected_product_ids.indexOf( product.id ) !== -1 )
                                                         .map(product => product.price)
                                                         .reduce( (prev_price, current_price) => prev_price + current_price, 0);
        }
    },
    methods: {
       move_to_wishlist()
       {

       },
       remove_from_wishlist()
       {
           this.selected_product_ids.forEach(this.remove_from_wishlist_callback);
           this.selected_product_ids.splice(0, this.selected_product_ids.length);
       },
       remove_from_wishlist_callback(product_id)
       {
           axios.post(`/wishlist/${this.wishlist_object.id}/${product_id}`);
           this.wishlist_object.products_json = this.wishlist_object.products_json.filter( product => product.id !== product_id );
       },
       save_selection(wishlist_id, product_id, selected)
       {
           if(wishlist_id == this.wishlist_object.id) {
                if(selected)
                    this.selected_product_ids.push(product_id);
                else
                    this.selected_product_ids.splice(this.selected_product_ids.indexOf(product_id), 1);
           }
       },
       selectAll()
       {
           this.all_selected = !this.all_selected;

           if(this.all_selected)
               this.selected_product_ids = this.wishlist_object.products_json.map( product => product.id );
            else
               this.selected_product_ids = [];

           window.events.$emit('toggle_select_all_products_in_a_wishlist', this.wishlist_object.id, this.selected_product_ids);
       },
       setDefault()
       {
           axios.get(`/wishlist/${this.wishlist_object.id}/set_default`)
                .then( () => location.reload() );
       },
       start_rename()
       {
           this.new_name = this.wishlist_object.name;
           this.is_renaming = true;
       },
       confirm_rename()
       {
           if(this.new_name === '') {
               alert('new wishlist name is required');
           } else {
               axios.put(`/wishlist/${this.wishlist_object.id}`, {
                   'name' : this.new_name
               }).then(this.rename_wishlist)
                 .catch(
                   error => alert('wishlist with this name is already exists')
               );
           }
       },
       rename_wishlist()
       {
           this.wishlist_object.name = this.new_name;
           this.is_renaming = false;
       },
       delete_wishlist()
       {
           axios.delete(`/wishlist/${this.wishlist_object.id}`)
                .then(() => location.reload());
       },
       copyURL()
       {
           navigator.clipboard.writeText( this.url )
                              .then( () => alert('wishlist URL was successfully copied') );
       }
    }
}
</script>

<style scoped>

</style>
