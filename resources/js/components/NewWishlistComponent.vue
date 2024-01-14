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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="is_default" id="set_as_default_checkbox">
                            <label class="form-check-label" for="set_as_default_checkbox">
                                Set as default
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" @click="confirm()">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary" data-toggle="modal" data-target="#new_wishlist_modal" v-if="user.id">+ Create Wishlist</button>
    </div>
</template>

<script>
export default {
    name: "NewWishlistComponent",
    props: ['user'],
    data: function() {
        return {
            'new_name' : '',
            'is_default' : false
        };
    },
    methods: {
        confirm()
        {
            if(this.new_name == '') {
                alert('wishlist name is required');
            } else {
                axios.post('/wishlist', {
                    name: this.new_name,
                    default: this.is_default
                }).then(() => location.reload())
                  .catch(
                    error => alert('wishlist with this name is already exists')
                );
            }
        }
    }
}
</script>

<style scoped>

</style>
