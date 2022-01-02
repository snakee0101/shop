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
    props: ['checkout_route', 'total']
}
</script>

<style scoped>

</style>
