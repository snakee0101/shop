@extends('product.main')

@section('reviews')
    <div class="reviews-view">
        @auth
             @include('partials.review_form')
        @else
            <form class="alert alert-danger">
                Log In to post a review
            </form>
        @endauth

        <div class="reviews-view__list" id="reviews"><h3 class="reviews-view__header">Customer Reviews</h3>
            <div class="reviews-list">
                <ol class="reviews-list__content">
                    @foreach($reviews as $review)
                        <li class="reviews-list__item">
                            <div class="review">
                                <div class="review__avatar"><img src="/images/avatars/avatar-1.jpg"
                                                                 alt=""></div>
                                <div class="review__content">
                                    <div
                                        class="review__author">{{ $review->author->first_name }} {{ $review->author->last_name }}</div>
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
                                    <div class="review__date">{{ $review->created_at->format('d F, Y') }}</div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ol>
                <div class="reviews-list__pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ ($reviews->currentPage() == 1) ? 'disabled' : '' }}">
                            <a class="page-link page-link--with-arrow" href="{{ $reviews->url( $reviews->currentPage() - 1 ) . '#reviews' }}" aria-label="Previous">
                                <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px"
                                     height="13px">
                                    <use xlink:href="/images/sprite.svg#arrow-rounded-left-8x13"></use>
                                </svg>
                            </a>
                        </li>
                        @for($page = 1; $page < $reviews->lastPage() + 1; $page++)
                            <li class="page-item {{ ($page == $reviews->currentPage()) ? 'active' : '' }}">
                                <a class="page-link" href="{{ ($page == $reviews->currentPage()) ? '#reviews' : $reviews->url($page) . '#reviews' }}">{{ $page }}</a>
                            </li>
                        @endfor
                        <li class="page-item {{ ($reviews->currentPage() == $reviews->lastPage()) ? 'disabled' : '' }}">
                            <a class="page-link page-link--with-arrow" href="{{ $reviews->url( $reviews->currentPage() + 1 ) . '#reviews' }}" aria-label="Next">
                                <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                    <use xlink:href="/images/sprite.svg#arrow-rounded-right-8x13"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
