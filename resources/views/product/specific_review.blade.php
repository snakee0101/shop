@extends('product.main', ['product' => $review->product])

@section('reviews')
    <div class="reviews-view">
        <p>
            <a href="{{ route('product.reviews', $review->product) . '#product_tabs' }}"> &lt Back to all reviews</a>
        </p>
        <div class="reviews-view__list" id="reviews"><h3 class="reviews-view__header">Customer Reviews</h3>
            <div class="reviews-list">
                <ol class="reviews-list__content">
                    @include('partials.review_card', ['review' => $review])
                    @include('partials.reply_form', ['review' => $review])

                    @foreach($review->replies as $reply)
                        @include('partials.reply_card', ['reply' => $reply])
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
