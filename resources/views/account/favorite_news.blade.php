<div class="block">
    <div class="posts-view">
        <div class="posts-view__list posts-list posts-list--layout--list">
            <div class="posts-list__body">
                @foreach($news as $news_article)
                    @include('partials.news.card', ['news_article' => $news_article])
                @endforeach
            </div>
        </div>
        <div class="posts-view__pagination">
            {{ $news->links() }}
        </div>
    </div>
</div>
