@extends('product.main')

@section('questions')
    <div class="reviews-view">
        @auth
            @include('partials.question_form')
        @else
            <form class="alert alert-danger">
                Log In to ask a question
            </form>
        @endauth

        <div class="reviews-view__list" id="reviews"><h3 class="reviews-view__header">Customer Questions</h3>
            <div class="reviews-list">
                <ol class="reviews-list__content">
                    @foreach($questions as $question)
                        @include('partials.question_card', ['question' => $question])
                        @include('partials.reply_form', ['review' => $question])

                        @foreach($question->replies as $reply)
                            @include('partials.reply_card', ['reply' => $reply])
                        @endforeach
                    @endforeach
                </ol>
                <div class="reviews-list__pagination">
                    @include('partials.pagination', ['paginator' => $questions])
                </div>
            </div>
        </div>
    </div>
@endsection
