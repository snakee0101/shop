<template>
    <div>
        <button class="btn btn-primary" @click="showDialog()">+ Create Wishlist</button>
    </div>
</template>

<script>
export default {
    name: "NewWishlistComponent",
    methods: {
        showDialog()
        {
            alert('new dialog');
        }
    }
}
</script>

<style scoped>

</style>
