@extends('product.main')

@section('videos')
<!--    <p>Normal youtube link: https://www.youtube.com/watch?v=TxEAgEoXdEs</p>
    <p>Valid iframe youtube link: https://www.youtube.com/embed/TxEAgEoXdEs</p>-->
    @forelse($product->videos as $video)
        <div class="text-center d-inline-block">
            <div class="d-inline-block">
                <iframe style="margin: 10px"
                        width="280" height="157"
                        src="{{ $video->url }}"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>

                </iframe>
                <h4 class="ml-2">{{ $video->title }}</h4>
            </div>
        </div>
    @empty
        <div class="alert alert-primary" role="alert">
            There is no video for current product
        </div>
    @endforelse

@endsection
