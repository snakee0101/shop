<div class="posts-list__item">
    <div class="post-card post-card--layout--list post-card--size--nl">
        <div class="post-card__image" style="width: 250px">
            <a href="{{ route('news.show', $news_article) }}">
                <img src="{{ $news_article->main_image_url }}" alt="">
            </a>
        </div>
        <div class="post-card__info">
            <div class="post-card__category">
                <a href="{{ route('news.index', ['category' => $news_article->category->id])  }}">
                    {{ $news_article->category->name }}
                </a>
            </div>
            <div class="post-card__date" style="color: #f00">{{ $news_article->created_at->format('M d, Y') }}</div>

            <div class="post-card__name w-100">
                <a href="{{ route('news.show', $news_article) }}">
                    {{ $news_article->caption }}
                </a>
            </div>

            <div class="post-card__content">
                {!! $news_article->excerpt() !!}
            </div>
            <div class="post-card__read-more">
                <a href="{{ route('news.show', $news_article) }}" class="btn btn-secondary btn-sm">Read More</a>
            </div>
        </div>
    </div>
</div>
