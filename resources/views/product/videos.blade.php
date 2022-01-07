@extends('product.main')

@section('videos')
    <p>Normal youtube link: https://www.youtube.com/watch?v=TxEAgEoXdEs</p>
    <p>Valid iframe youtube link: https://www.youtube.com/embed/TxEAgEoXdEs</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/TxEAgEoXdEs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection
