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
    props: ['user'],
    data() {
        return {
            logged_in_user: this.user ? JSON.parse(this.user) : {}
        }
    },
    methods: {
        toggleFavorite() {
            if(this.user) {
                alert('toggle favorite');
            } else {
                alert('The user is not logged in');
            }
        }
    }
}
</script>

<style scoped>

</style>
