<template>
    <div class="d-inline-block m-3 mb-4 border" style="max-width: 400px">
        <div class="d-inline-flex flex-row">
            <div v-for="product in product_set_object.products_json" class="d-inline-flex flex-col ml-2">
                <div>
                    <img src="/images/products/product-2.jpg" style="width: 50px">
                    <h6 class="mt-2 text-left">${{ product.price }}</h6>
                </div>
                <p class="ml-2 text-left">{{ product.name }}</p>
            </div>
        </div>
        <div class="d-flex flex-row-reverse align-content-center mt-2">
            <cart-button-component style="width: 200px" :product="product_set_object">

            </cart-button-component>
            <h3 class="mr-3 my-0 mt-1">${{ product_set_object.products_json[0].price + product_set_object.products_json[1].price }}</h3>
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
