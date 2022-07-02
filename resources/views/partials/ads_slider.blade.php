<div class="block-slideshow block-slideshow--layout--full block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block-slideshow__body">
                    <div class="owl-carousel">
                        @foreach($ads as $ad)
                            <a class="block-slideshow__slide" href="{{ route('advertisement.show', $ad) }}">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                     style="background-image: url('{{ Storage::url($ad->image_url_rectangle) }}')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                     style="background-image: url('{{ Storage::url($ad->image_url_square) }}')"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">
                                        {{ $ad->caption }}
                                    </div>
                                    <div class="block-slideshow__slide-text">
                                        {{ $ad->description }}
                                    </div>
                                    <div class="block-slideshow__slide-button">
                                        <span class="btn btn-primary btn-lg">
                                            Shop Now
                                        </span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-right">
            <p class="w-100 pr-3 mt-2">
                <a href="{{ route('advertisement.index') }}">More offers</a>
            </p>
        </div>
    </div>
</div>
