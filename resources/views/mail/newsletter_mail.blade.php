<p style="font-size: 2em; margin-bottom: 10px">
    Newsletter - <b>{{ $news_article->caption }}</b>
</p>

<p>
    <img src="{{ asset($news_article->main_image_url ) }}">
</p>

{!! $news_article->excerpt() !!}

@component('mail::button', ['url' => $news_article_url])
    Go to news article
@endcomponent
