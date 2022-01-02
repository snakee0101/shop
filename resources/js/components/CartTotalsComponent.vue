<template>
    <div class="card-body">
        <h3 class="card-title">Cart Totals</h3>
        <table class="cart__totals">
            <thead class="cart__totals-header">
            <tr>
                <th>Subtotal</th>
                <td>$0.00</td>
            </tr>
            </thead>
            <tbody class="cart__totals-body">
            <tr>
                <th>Shipping</th>
                <td>$0.00
                    <div class="cart__calc-shipping"><a href="#">Calculate Shipping</a></div>
                </td>
            </tr>
            <tr>
                <th>Tax</th>
                <td>$0.00</td>
            </tr>
            </tbody>
            <tfoot class="cart__totals-footer">
            <tr>
                <th>Total</th>
                <td>${{ total }}</td>
            </tr>
            </tfoot>
        </table>
        <a class="btn btn-primary btn-xl btn-block cart__checkout-button"
           :href="checkout_route">Proceed to checkout</a>
    </div>
</template>

<script>
export default {
    name: "CartTotalsComponent",
    props: ['checkout_route', 'initial_total'],
    data() {
        return {
            'total': this.initial_total
        };
    },
    mounted() {
        window.events.$on('update_cart_total', this.update_total);
    },
    methods: {
        update_total(cart_items_object)
        {
            this.total = Object.values(cart_items_object)
                               .map( item => item.price * item.quantity )
                               .reduce( (price_1, price_2) => price_1 + price_2 );
        }
    }
}
</script>

<style scoped>

</style>
