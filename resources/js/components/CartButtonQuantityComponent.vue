<template>
    <div class="d-flex flex-col">
        <div class="product__actions-item">
            <div class="input-number product__quantity"><input id="product-quantity"
                                                               class="input-number__input form-control form-control-lg"
                                                               type="number" min="1"
                                                               :value="quantity">
                <div class="input-number__add" @click="quantity++"></div>
                <div class="input-number__sub" @click="quantity--"></div>
            </div>
        </div>
        <div class="product__actions-item product__actions-item--addtocart">
            <button disabled class="btn btn-dark btn-lg product-card__addtocart" type="button" v-if="in_cart">
                In Cart
            </button>
            <button @click="addToCart()" class="btn btn-primary btn-lg product-card__addtocart" type="button" v-else>
                Add To Cart
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "CartButtonQuantityComponent",
    props: ['product'],
    data() {
        return {
            'in_cart' : this.product.inCart,
            'quantity' : 1
        };
    },
    watch: {
        quantity: function (newQuantity, oldQuantity) {
            if(newQuantity < 1)
                this.quantity = 1;
        }
    },
    methods: {
        addToCart()
        {
            axios.get(`/cart/add/${this.product.id}/${this.quantity}`);
            this.in_cart = true;
        }
    }
}
</script>

<style scoped>

</style>
