<li class="reviews-list__item pb-3">
    <div class="review">
        <div class="review__avatar"><img src="/images/avatars/avatar-1.jpg"
                                         alt=""></div>
        <div class="review__content w-100">
            <div class="review__author d-flex justify-content-between">
                <div>{{ $review->author->first_name }} {{ $review->author->last_name }}</div>
                <div class="review__date m-0 mt-1">
                    {{ $review->created_at->format('d F, Y') }}
                    <a href="{{ route('review.show', $review) . '#product_tabs' }}" title="get a link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                    </a>
                    <report-component :user="{{ auth()->user() ?? 0 }}"
                                      :object_id="{{ $review->id }}"
                                      object_type="{{ $review::class }}">

                    </report-component>
                </div>
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
                    <p class="m-0">{{ $review->advantages }}</p>
                </div>
                <div class="review__text">
                    <h6>Disadvantages:</h6>
                    <p class="m-0">{{ $review->disadvantages }}</p>
                </div>
            @endif
            <div class="review__text">
                <gallery-viewer-component :photos="{{ $review->photos }}" :videos="{{ $review->videos }}">

                </gallery-viewer-component>
            </div>
            <div class="review__text">
                <vote-controls-component object_type="{{ $review::class }}"
                                         :object="{{ $review }}"
                                         :user="{{ auth()->user() ?? '{}' }}">

                </vote-controls-component>
            </div>
        </div>
    </div>
</li>
