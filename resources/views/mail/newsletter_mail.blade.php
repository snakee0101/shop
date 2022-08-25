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

<p>If you don't want to receive this email - click <a href="{{ $unsubscribe_url }}" style="color: #f00">Unsubscribe from newsletter</a></p>
