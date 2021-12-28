<template>
    <button @click="toggleFavorite()" class="product-card__quickview wishlist_toggle" type="button">
        <svg width="16px" height="16px">
            <use xlink:href="images/sprite.svg#wishlist-16"></use>
        </svg>
        <span className="fake-svg-icon"></span>
    </button>
</template>

<script>
export default {
    name: "FavoriteButtonComponent",
    methods: {
        toggleFavorite() {
            alert('toggle favorite');
        }
    }
}
</script>

<style scoped>

</style>
