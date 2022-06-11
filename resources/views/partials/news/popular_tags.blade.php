<div class="block-sidebar__item">
    <div class="widget-tags widget"><h4 class="widget__title">Popular Tags</h4>
        <div class="tags tags--lg">
            <div class="tags__list">
                @foreach($popular_tags as $popular_tag)
                    <a href="{{ route('news.index', ['tag' => $popular_tag->id])  }}">{{ $popular_tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
