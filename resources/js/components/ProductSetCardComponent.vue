<template>
    <div class="d-inline-block m-3 mb-4 border" style="max-width: 400px">
        <div class="d-inline-flex flex-row">
            <div v-for="product in product_set_object.products" class="d-inline-flex flex-col ml-2">
                <div>
                    <img src="/images/products/product-2.jpg" style="width: 50px">
                    <h6 class="mt-2 text-left">${{ product.price }}</h6>
                </div>
                <p class="ml-2 text-left">{{ product.name }}</p>
            </div>
        </div>
        <div class="d-flex flex-row-reverse align-content-center mt-2">
            <cart-button-component style="width: 200px" :purchaseable="product_set_object">

            </cart-button-component>
            <!--if there is a discount of entire product set - show it-->
            <h3 class="mr-3 my-0 mt-1" v-if="product_set_object.PriceWithDiscount < product_set_object.price">
                <small class="text-secondary"><s>${{ product_set_object.price }}</s></small>
                <span class="text-danger">${{ product_set_object.PriceWithDiscount }}</span>
            </h3>
            <!--otherwise show a regular price-->
            <h3 class="mr-3 my-0 mt-1" v-else>
                ${{ product_set_object.products[0].price + product_set_object.products[1].price }}
            </h3>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductSetCardComponent",
    props: ['product_set', 'user'],
    data() {
        return {
            product_set_object: this.product_set ? JSON.parse(this.product_set) : {},
            user_object: this.user ? JSON.parse(this.user) : {},
        };
    },
}
</script>

<style scoped>

</style>
