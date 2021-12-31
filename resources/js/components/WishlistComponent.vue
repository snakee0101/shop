<template>
    <div class="card mb-5">
        <div class="card-header d-flex align-content-center">
            <p class="d-inline-block m-0 pt-2 mr-auto">{{ wishlist.name }}</p>
            <div class="d-inline-block">
                <button class="btn btn-danger">Delete</button>
                <button class="btn btn-warning">Rename</button>
                <button class="btn btn-info">Set as default</button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="d-flex align-content-center mb-3 p-4">
                <div class="d-inline-block flex-grow-1">
                    <button class="btn btn-success">Select All</button>
                    <button class="btn btn-warning">Move</button>
                    <button class="btn btn-danger">Delete</button>
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
                    <p class="m-0 font-weight-bold" style="font-size: 1.5em">500$</p>
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
          'selected_product_ids' : []
        };
    },
    methods: {
       remove_from_wishlist(wishlist_id, product_id)
       {
           if(wishlist_id == this.wishlist_object.id) {
               let products_without_deleted = this.wishlist_object.products_json.filter( product => product.id !== product_id );
               this.wishlist_object.products_json = products_without_deleted;
           }
       },
       save_selection(wishlist_id, product_id, selected)
       {
           if(wishlist_id == this.wishlist_object.id) {
                if(selected)
                    this.selected_product_ids.push(product_id);
                else
                    this.selected_product_ids.splice(this.selected_product_ids.indexOf(product_id), 1);
           }
       }
    }
}
</script>

<style scoped>

</style>
