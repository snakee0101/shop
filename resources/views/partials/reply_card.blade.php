<li class="reviews-list__item ml-5 border-left border-bottom-0 border-info mb-4 pl-2">
    <div class="review">
        <div class="review__content w-100">
            <div class="review__author d-flex justify-content-between">
                <div>{{ $reply->author->first_name }} {{ $reply->author->last_name }}</div>
                <div class="review__date m-0 mt-1">{{ $reply->created_at->format('d F, Y') }}</div>
            </div>
            <div class="review__text">{{ $reply->text }}</div>
        </div>
    </div>
</li>
