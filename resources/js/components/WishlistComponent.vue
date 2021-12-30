<template>
    <div class="card mb-5">
        <div class="card-header d-flex align-content-center">
            <p class="d-inline-block m-0 pt-2 mr-auto">My wishlist</p>
            <div class="d-inline-block">
                <button class="btn btn-danger">Delete</button>
                <button class="btn btn-warning">Rename</button>
                <button class="btn btn-info">Set as default</button>
            </div>
        </div>
        <div class="card-body py-4">
            <div class="d-flex align-content-center mb-3">
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
            <div class="d-flex">
                <p>here must be a product card</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "WishlistComponent"
}
</script>

<style scoped>

</style>
