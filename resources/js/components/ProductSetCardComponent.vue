<template>
    <div class="block-products-carousel__column">
        <div class="block-products-carousel__cell">
            <div class="product-card">
                <div class="product-card__image"><a :href=" '/product/' + product_object.id "><img
                    src="/images/products/product-2.jpg" alt=""></a></div>
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
                <div class="product-card__actions">
                    <div class="product-card__prices">${{ product_object.price }}</div>
                    <div class="product-card__buttons">
                        <cart-button-component :product="product_object"></cart-button-component>
                        <compare-button-component :user="user_object" :product="product_object"></compare-button-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ProductSetCardComponent",
        props: ['productSet', 'user'],
        data() {
            return {
                product_set_object: this.productSet ? JSON.parse(this.productSet) : {},
                user_object: this.user ? JSON.parse(this.user) : {},
            };
        },
}
</script>

<style scoped>

</style>
