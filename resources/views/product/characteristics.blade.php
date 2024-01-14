@extends('product.main')

@section('characteristics')
    <div class="spec">
        <h3 class="spec__header">Specification</h3>
        @foreach($product->characteristics as $char)
            <div class="spec__row">
                <div class="spec__name">{{ $char->name }}</div>
                <div class="spec__value">{{ $char->pivot->value }}</div>
            </div>
        @endforeach
    </div>
{{--    <div class="spec__section">
            <h4 class="spec__section-title">Dimensions</h4>
            <div class="spec__row">
                <div class="spec__name">Length</div>
                <div class="spec__value">99 mm</div>
            </div>
            ....
        </div>
        <div class="spec__disclaimer">Information on technical characteristics, the delivery
            set, the country of manufacture and the appearance of the goods is for reference
            only and is based on the latest information available at the time of publication.
        </div>--}}
@endsection
