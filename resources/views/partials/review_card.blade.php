<li class="reviews-list__item">
    <div class="review">
        <div class="review__avatar"><img src="/images/avatars/avatar-1.jpg"
                                         alt=""></div>
        <div class="review__content w-100">
            <div class="review__author d-flex justify-content-between">
                <div>{{ $review->author->first_name }} {{ $review->author->last_name }}</div>
                <div class="review__date m-0 mt-1">{{ $review->created_at->format('d F, Y') }}</div>
            </div>
            <div class="review__rating">
                <div class="rating">
                    <div class="rating__body">
                        @for($i=0; $i < $review->rating; $i++)
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
                        @endfor
                        @for($i = $review->rating + 1; $i < 6; $i++)
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
                        @endfor
                    </div>
                </div>
            </div>
            <div class="review__text">{{ $review->comment }}</div>
            @if($review->advantages)
                <div class="review__text">
                    <h6>Advantages:</h6>
                    <p>{{ $review->advantages }}</p>
                </div>
                <div class="review__text">
                    <h6>Disadvantages:</h6>
                    <p>{{ $review->disadvantages }}</p>
                </div>
            @endif
        </div>
    </div>
</li>
