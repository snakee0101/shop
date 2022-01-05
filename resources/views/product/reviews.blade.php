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
                        @include('partials.review_card', ['review' => $review])
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
