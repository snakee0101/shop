<template>
    <button @click="addToCart()" disabled class="btn btn-dark product-card__addtocart" type="button" v-if="in_cart">
        In Cart
    </button>
    <button @click="addToCart()" class="btn btn-primary product-card__addtocart" type="button" v-else>
        Add To Cart
    </button>
</template>

<script>
export default {
    name: 'CartButtonComponent',
    props: ['product'],
    data() {
        return {
            'in_cart' : this.product.inCart
        };
    },
    methods: {
        addToCart() {
            axios.get(`/cart/add/${this.product.id}/1`);
            this.in_cart = true;
        }
    }
}
</script>
