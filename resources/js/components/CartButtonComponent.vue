<template>
    <button disabled class="btn btn-dark product-card__addtocart" type="button" v-if="in_cart">
        In Cart
    </button>
    <button @click="addToCart()" class="btn btn-primary product-card__addtocart" type="button" v-else>
        Add To Cart
    </button>
</template>

<script>
export default {
    name: 'CartButtonComponent',
    props: ['purchaseable'],
    data() {
        return {
            'in_cart' : this.purchaseable.inCart
        };
    },
    mounted()
    {
        window.events.$on('add_to_cart_remote', this.addToCartRemote);
    },
    methods: {
        addToCartRemote(purchaseable_id)
        {
            if(purchaseable_id === this.purchaseable.id)
                this.addToCart();
        },
        addToCart()
        {
            axios.get(`/cart/add/${this.purchaseable.id}/1`);
            this.in_cart = true;
        }
    }
}
</script>
