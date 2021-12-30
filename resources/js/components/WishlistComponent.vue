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
                <p>here must be a product card</p>
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
    props: ['wishlist'],
    data() {
        return {
          'wishlist_object' : this.wishlist
        };
    }
}
</script>

<style scoped>

</style>
