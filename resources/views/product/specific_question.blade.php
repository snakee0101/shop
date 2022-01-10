@extends('product.main')

@section('questions')
    <div class="reviews-view">
        <p>
            <a href="{{ route('product.questions', $product) . '#product_tabs' }}"> &lt Back to all questions</a>
        </p>
        <div class="reviews-view__list" id="reviews"><h3 class="reviews-view__header">Customer Questions</h3>
            <div class="reviews-list">
                <ol class="reviews-list__content">
                    @include('partials.question_card', ['question' => $question])
                    @include('partials.reply_form', ['review' => $question])

                    @foreach($question->replies as $reply)
                        @include('partials.reply_card', ['reply' => $reply])
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
