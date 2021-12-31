<template>
    <div>
        <div class="modal fade" id="new_wishlist_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New wishlist</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="wishlist_name">Name of new wishlist</label>
                            <input type="text" class="form-control" id="wishlist_name" v-model="new_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" @click="confirm()">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary" data-toggle="modal" data-target="#new_wishlist_modal">+ Create Wishlist</button>
    </div>
</template>

<script>
export default {
    name: "NewWishlistComponent",
    data: function() {
        return {
            'new_name' : ''
        };
    },
    methods: {
        confirm()
        {
            alert('confirmed');
        }
    }
}
</script>

<style scoped>

</style>
