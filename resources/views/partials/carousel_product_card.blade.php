<div class="block-products-carousel__column">
    <div class="block-products-carousel__cell">
        <div class="product-card">
            <button class="product-card__quickview" type="button">
                <svg width="16px" height="16px">
                    <use xlink:href="images/sprite.svg#quickview-16"></use>
                </svg>
                <span class="fake-svg-icon"></span></button>
            <div class="product-card__badges-list">
                <div class="product-card__badge product-card__badge--hot">Badge</div>
            </div>
            <div class="product-card__image"><a href="product.html"><img
                        src="images/products/product-2.jpg" alt=""></a></div>
            <div class="product-card__info">
                <div class="product-card__name"><a href="product.html">{{ $product->name }}</a></div>
                <div class="product-card__rating">
                    <div class="rating">
                        <div class="rating__body">
                            <svg class="rating__star rating__star--active" width="13px"
                                 height="12px">
                                <g class="rating__fill">
                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                </g>
                                <g class="rating__stroke">
                                    <use
                                        xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                            <svg class="rating__star rating__star--active" width="13px"
                                 height="12px">
                                <g class="rating__fill">
                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                </g>
                                <g class="rating__stroke">
                                    <use
                                        xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                            <svg class="rating__star rating__star--active" width="13px"
                                 height="12px">
                                <g class="rating__fill">
                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                </g>
                                <g class="rating__stroke">
                                    <use
                                        xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                            <svg class="rating__star rating__star--active" width="13px"
                                 height="12px">
                                <g class="rating__fill">
                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                </g>
                                <g class="rating__stroke">
                                    <use
                                        xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                            <svg class="rating__star rating__star--active" width="13px"
                                 height="12px">
                                <g class="rating__fill">
                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                </g>
                                <g class="rating__stroke">
                                    <use
                                        xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                        </div>
                    </div>
                    <div class="product-card__rating-legend">0 Reviews</div>
                </div>
                <ul class="product-card__features-list">
                    <li>Speed: 750 RPM</li>
                    <li>Power Source: Cordless-Electric</li>
                    <li>Battery Cell Type: Lithium</li>
                    <li>Voltage: 20 Volts</li>
                    <li>Battery Capacity: 2 Ah</li>
                </ul>
            </div>
            <div class="product-card__actions">
                <div class="product-card__availability">Availability: <span
                        class="text-success">In Stock</span></div>
                <div class="product-card__prices">${{ $product->price }}</div>
                <div class="product-card__buttons">
                    <button class="btn btn-primary product-card__addtocart" type="button">Add To
                        Cart
                    </button>
                    <button
                        class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                        type="button">Add To Cart
                    </button>
                    <button
                        class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                        type="button">
                        <svg width="16px" height="16px">
                            <use xlink:href="images/sprite.svg#wishlist-16"></use>
                        </svg>
                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                    <button
                        class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                        type="button">
                        <svg width="16px" height="16px">
                            <use xlink:href="images/sprite.svg#compare-16"></use>
                        </svg>
                        <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                </div>
            </div>
        </div>
    </div>
</div>
