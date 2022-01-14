<li class="reviews-list__item pb-3">
    <div class="review">
        <div class="review__avatar"><img src="/images/avatars/avatar-1.jpg"
                                         alt=""></div>
        <div class="review__content w-100">
            <div class="review__author d-flex justify-content-between">
                <div>{{ $question->author->first_name }} {{ $question->author->last_name }}</div>
                <div class="review__date m-0 mt-1">
                    {{ $question->created_at->format('d F, Y') }}
                    <a href="{{ route('question.show', $question) . '#product_tabs' }}" title="get a link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                        </svg>
                    </a>
                    <report-component :user="{{ auth()->user() ?? 0 }}"
                                      :object_id="{{ $question->id }}"
                                      object_type="{{ $question::class }}">

                    </report-component>
                </div>
            </div>
            <div class="review__text">{{ $question->comment }}</div>
            <div class="review__text">
                <gallery-viewer-component :photos="{{ $question->photos }}" :videos="{{ $question->videos }}">

                </gallery-viewer-component>
            </div>
            <div class="review__text">
                <vote-controls-component object_type="{{ $question::class }}"
                                         :object="{{ $question }}"
                                         :user="{{ auth()->user() ?? '{}' }}">

                </vote-controls-component>
            </div>
        </div>
    </div>
</li>
