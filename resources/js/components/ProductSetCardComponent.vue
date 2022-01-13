<template>
    <div class="d-inline-block m-3 mb-4" style="max-width: 400px">
        <div class="d-inline-flex flex-row">
            <div v-for="product in [1,2]" class="d-inline-flex flex-col">
                <div>
                    <img src="/images/products/product-2.jpg" style="width: 50px">
                    <h6 class="mt-2">$100</h6>
                </div>
                <p class="ml-2">product nayutyutyutyume</p>
            </div>
        </div>
        <div class="d-flex flex-row-reverse align-content-center mt-2">
            <cart-button-component style="width: 200px">

            </cart-button-component>
            <h3 class="mr-3 my-0 mt-1">$200</h3>
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
