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

                        @auth
                            @include('partials.reply_form', ['review' => $review])
                        @endauth

                        @foreach($review->replies as $reply)
                            @include('partials.reply_card', ['reply' => $reply])
                        @endforeach
                    @endforeach
                </ol>
                <div class="reviews-list__pagination">
                    @include('partials.pagination', ['paginator' => $reviews])
                </div>
            </div>
        </div>
    </div>
@endsection
