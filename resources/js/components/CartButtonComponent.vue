<template>
    <button disabled class="btn btn-dark btn-lg product-card__addtocart" type="button" v-if="in_cart">
        In Cart
    </button>
    <button @click="addToCart()" class="btn btn-primary btn-lg product-card__addtocart" type="button" v-else>
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
    mounted()
    {
        window.events.$on('add_to_cart_remote', this.addToCartRemote);
    },
    methods: {
        addToCartRemote(product_id)
        {
            if(product_id === this.product.id)
                this.addToCart();
        },
        addToCart()
        {
            axios.get(`/cart/add/${this.product.id}/1`);
            this.in_cart = true;
        }
    }
}
</script>
