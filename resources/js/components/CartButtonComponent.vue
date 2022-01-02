<template>
    <button @click="addToCart()" class="btn btn-primary product-card__addtocart" type="button">
        Add To Cart
    </button>
</template>

<script>
export default {
    name: 'CartButtonComponent',
    props: ['product'],
    methods: {
        addToCart() {
            axios.get(`/cart/add/${this.product.id}/1`);
        }
    }
}
</script>
