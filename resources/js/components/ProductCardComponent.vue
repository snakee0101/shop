<template>
    <div class="block-products-carousel__column">
        <div class="block-products-carousel__cell">
            <div class="product-card">
                <div class="form-check" v-if="InFavorites">
                    <button @click="toggleSelect()" class="product-card__quickview wishlist_toggle" type="button">
                        <svg v-if="selected" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" stroke="#000" class="bi bi-check-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/>
                        </svg>

                        <svg v-else xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" stroke="#000" class="bi bi-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        </svg>
                        <span class="fake-svg-icon"></span>
                    </button>
                </div>
                <favorite-button-component :user="user_object" :product="product_object" v-else></favorite-button-component>
                <div class="product-card__badges-list">
                    <div class="product-card__badge product-card__badge--hot">Badge</div>
                </div>
                <div class="product-card__image"><a :href=" '/product/' + product_object.id "><img
                    :src="product_object.photos[0].url" alt=""></a></div>
                <div class="product-card__info">
                    <div class="product-card__name"><a :href=" '/product/' + product_object.id ">{{ product_object.name}}</a></div>
                    <div class="product-card__rating">
                        <div class="rating">
                            <div class="rating__body">
                                <template v-for="n in product_object.ReviewStarsAverage">
                                    <svg class="rating__star rating__star--active"
                                         width="13px" height="12px">
                                        <g class="rating__fill">
                                            <use
                                                xlink:href="/images/sprite.svg#star-normal"></use>
                                        </g>
                                        <g class="rating__stroke">
                                            <use
                                                xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                        </g>
                                    </svg>
                                    <div
                                        class="rating__star rating__star--only-edge rating__star--active">
                                        <div class="rating__fill">
                                            <div class="fake-svg-icon"></div>
                                        </div>
                                        <div class="rating__stroke">
                                            <div class="fake-svg-icon"></div>
                                        </div>
                                    </div>
                                </template>
                                <template v-for="n in (5 - product_object.ReviewStarsAverage)">
                                    <svg class="rating__star" width="13px" height="12px">
                                        <g class="rating__fill">
                                            <use
                                                xlink:href="/images/sprite.svg#star-normal"></use>
                                        </g>
                                        <g class="rating__stroke">
                                            <use
                                                xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                        </g>
                                    </svg>
                                    <div class="rating__star rating__star--only-edge">
                                        <div class="rating__fill">
                                            <div class="fake-svg-icon"></div>
                                        </div>
                                        <div class="rating__stroke">
                                            <div class="fake-svg-icon"></div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                        <div class="product-card__rating-legend">
                            <a :href="'/product/' + product_object.id + '/reviews#reviews'">
                                {{ product_object.reviews_count }} Reviews
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-card__actions pb-2">
                    <div class="product-card__prices" v-if="product_object.PriceWithDiscount < product_object.price">
                        <span class="font-weight-bold text-danger">${{ product_object.PriceWithDiscount }}</span>
                        <span class="text-secondary" style=""><s><small>${{ product_object.price }}</small></s></span>
                    </div>
                    <div class="product-card__prices" v-else>
                        ${{ product_object.price }}
                    </div>
                    <div class="product-card__buttons mt-2">
                        <cart-button-component :purchaseable="product_object"
                                                v-if="product_object.in_stock !== statuses.STATUS_OUT_OF_STOCK">

                        </cart-button-component>
                        <compare-button-component :user="user_object" :product="product_object"></compare-button-component>
                    </div>
                </div>
                <div class="product-card__actions m-0">
                    <p class="m-0 text-success" v-if="product_object.in_stock === statuses.STATUS_IN_STOCK">In Stock</p>
                    <p class="m-0 text-danger" v-if="product_object.in_stock === statuses.STATUS_ENDS">Ends</p>
                    <p class="m-0 text-secondary" v-if="product_object.in_stock === statuses.STATUS_OUT_OF_STOCK">Out Of Stock</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ProductCardComponent",
        props: ['product', 'user', 'InFavorites', 'wishlist_object'],
        data() {
            return {
                product_object: this.product ? JSON.parse(this.product) : {},
                user_object: this.user ? JSON.parse(this.user) : {},
                selected: false,
                statuses: {
                    STATUS_IN_STOCK: 'In Stock',
                    STATUS_ENDS: 'Ends',
                    STATUS_OUT_OF_STOCK: 'Out Of Stock'
                }
            };
        },
        created() {
            window.events.$on('toggle_select_all_products_in_a_wishlist', this.toggleSelectAll);
            window.events.$on('add_all_to_cart', this.addToCart);
        },
        methods: {
            addToCart(wishlist_id)
            {
                if(wishlist_id == this.wishlist_object.id)
                    window.events.$emit('add_to_cart_remote', this.product_object.id);
            },
            toggleSelect()
            {
                this.selected = !this.selected;
                window.events.$emit('toggled_product_wishlist_selection', this.wishlist_object.id, this.product_object.id, this.selected);
            },
            toggleSelectAll(wishlist_id, selected_product_ids)
            {
                if(wishlist_id == this.wishlist_object.id) {
                    this.selected = selected_product_ids.length !== 0;
                }
            }
        }
}
</script>

<style scoped>

</style>
