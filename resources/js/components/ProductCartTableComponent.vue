<template>
    <table class="cart__table cart-table">
        <thead class="cart-table__head">
        <tr class="cart-table__row">
            <th class="cart-table__column cart-table__column--image">Image</th>
            <th class="cart-table__column cart-table__column--product">Product</th>
            <th class="cart-table__column cart-table__column--price">Price</th>
            <th class="cart-table__column cart-table__column--quantity">Quantity</th>
            <th class="cart-table__column cart-table__column--total">Total</th>
            <th class="cart-table__column cart-table__column--remove"></th>
        </tr>
        </thead>
        <tbody class="cart-table__body">
        <tr class="cart-table__row" v-for="(item, row_id) in items_object">
            <td class="cart-table__column cart-table__column--image"><a href="#"><img
                src="/images/products/product-1.jpg" alt=""></a></td>
            <td class="cart-table__column cart-table__column--product"><a href="#"
                                                                          class="cart-table__product-name">{{
                    item.name
                }}</a>
                <ul class="cart-table__options">
                    <li>Color: Yellow</li>
                    <li>Material: Aluminium</li>
                </ul>
            </td>
            <td class="cart-table__column cart-table__column--price" data-title="Price">
                <!--Check for product discount-->
                <p v-if="item.associatedModel.ObjectType === 'App\\Models\\Product'">
                    <!--if a product has a discount - show it-->
                    <template v-if="item.associatedModel.PriceWithDiscount < item.associatedModel.price">
                        <small class="text-secondary"><s>${{ item.associatedModel.price }}</s></small>
                        <span class="text-danger">${{ item.associatedModel.PriceWithDiscount }}</span>
                    </template>
                    <!--otherwise show normal price-->
                    <template v-else>
                        ${{ item.associatedModel.price }}
                    </template>
                </p>
                <!--Check for product set discount-->
                <p v-else>
                    <!--if there is product set based discount - calculate price with product set itself-->
                    <template v-if="item.associatedModel.PriceWithDiscount < item.associatedModel.price">
                        <small class="text-secondary"><s>${{ item.associatedModel.price }}</s></small>
                        <span class="text-danger">${{ item.associatedModel.PriceWithDiscount }}</span>
                    </template>
                    <!--otherwise show product prices with discounts applied-->
                    <template v-else>
                        ${{ item.associatedModel.price }}
                    </template>
                </p>
            </td>
            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                <div class="input-number"><input class="form-control input-number__input" type="number"
                                                 min="1" :value="item.quantity">
                    <div class="input-number__add" @click="update_quantity(+1, row_id, item)"></div>
                    <div class="input-number__sub" @click="update_quantity(-1, row_id, item)"></div>
                </div>
            </td>
            <td class="cart-table__column cart-table__column--total" data-title="Total">
                ${{ item.associatedModel.PriceWithDiscount * item.quantity }}
            </td>
            <td class="cart-table__column cart-table__column--remove">
                <button class="btn btn-light btn-sm btn-svg-icon" @click="delete_item(row_id)">
                    <svg width="12px" height="12px">
                        <use xlink:href="/images/sprite.svg#cross-12"></use>
                    </svg>
                </button>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "ProductCartRowComponent",
    props: ['destroy_path', 'items'],
    data() {
        return {
            'items_object' : this.items
        }
    },
    methods: {
        delete_item(cart_row_id)
        {
            axios.delete(`/cart/delete/${cart_row_id}`)
                .finally(() => location.reload());
        },
        update_quantity(amount, cart_row_id)
        {
            let initial_quantity = parseInt(this.items[cart_row_id].quantity);

            if(initial_quantity + amount < 1) //check against 0
                return;

            axios.post(`/cart/update_quantity/${cart_row_id}`, {
                'amount' : amount
            });

            this.$set(this.items[cart_row_id], 'quantity', initial_quantity + amount);

            let observer_to_object = JSON.parse(JSON.stringify(this.items));
            window.events.$emit('update_cart_total', observer_to_object);
        }
    }
}
</script>

<style scoped>

</style>
