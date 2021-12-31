<template>
    <div class="card mb-5">
        <div class="card-header d-flex align-content-center" :class="wishlist.is_active ? 'bg-dark text-white font-weight-bold' : ''">
            <p class="d-inline-block m-0 pt-2 mr-auto">{{ wishlist.name }} <span v-if="wishlist.is_active"> (Default)</span></p>
            <div class="d-inline-block">
                <button class="btn btn-danger">Delete</button>
                <button class="btn btn-warning">Rename</button>
                <button class="btn btn-info">Set as default</button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="d-flex align-content-center mb-3 p-4">
                <div class="d-inline-block flex-grow-1">
                    <button class="btn btn-success" @click="selectAll()" v-text="all_selected ? 'Deselect All' : 'Select All'"></button>
                    <button class="btn btn-warning">Move</button>
                    <button class="btn btn-danger" @click="remove_from_wishlist()">Delete</button>
                    <button class="btn btn-info">Copy URL</button>
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
    props: ['wishlist', 'user'],
    created() {
        window.events.$on('removed_product_from_wishlist', this.remove_from_wishlist);
        window.events.$on('toggled_product_wishlist_selection', this.save_selection);
    },
    data() {
        return {
          'wishlist_object' : this.wishlist,
          'user_object' : this.user,
          'selected_product_ids' : [],
          'all_selected' : false
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
       }
    }
}
</script>

<style scoped>

</style>
