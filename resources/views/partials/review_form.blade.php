<form class="reviews-view__form mt-0 pt-0 mb-5" method="post" action="{{ route('review.store') }}">
    @csrf
    <details>
        <summary class="h2 mb-4">
            Write A Review
        </summary>
        <div class="row">
            <div class="col-12 col-lg-9 col-xl-8">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="review-stars">Review Stars</label>
                        <select id="review-stars" class="form-control" name="rating">
                            <option value="5">5 Stars Rating</option>
                            <option value="4">4 Stars Rating</option>
                            <option value="3">3 Stars Rating</option>
                            <option value="2">2 Stars Rating</option>
                            <option value="1">1 Stars Rating</option>
                        </select></div>
                    {{--<div class="form-group col-md-4"><label for="review-author">Your
                            Name</label> <input type="text" class="form-control"
                                                id="review-author" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-4"><label for="review-email">Email
                            Address</label> <input type="text" class="form-control"
                                                   id="review-email"
                                                   placeholder="Email Address"></div>--}}
                </div>
                <div class="form-group"><label for="review-advantages">Advantages</label>
                    <textarea class="form-control" id="review-advantages" rows="1" name="advantages">{{ old('advantages') }}</textarea>
                    @error('advantages')
                        <p class="text-danger">Required if disadvantages are stated</p>
                    @enderror
                </div>
                <div class="form-group"><label for="review-disadvantages">Disadvantages</label>
                    <textarea class="form-control" id="review-disadvantages" rows="1" name="disadvantages">{{ old('disadvantages') }}</textarea>
                    @error('disadvantages')
                        <p class="text-danger">Required if advantages are stated</p>
                    @enderror
                </div>
                <div class="form-group"><label for="review-text">Your Review</label>
                    <textarea class="form-control" id="review-text" rows="6" name="comment">{{ old('comment') }}</textarea>
                    @error('comment')
                        <p class="text-danger">Review text is required</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="review-video">Link to Youtube video</label>
                    <div class="d-flex flex-row">
                        <textarea class="form-control mr-2" id="review-video" rows="1"></textarea>
                        <button type="button" class="btn btn-success">Add</button>
                    </div>
                </div>
                <new-photo-container-component>

                </new-photo-container-component>
                <div class="custom-control custom-checkbox mb-4">
                    <input type="checkbox" class="custom-control-input" id="notify_on_reply" name="notify_on_reply">
                    <label class="custom-control-label" for="notify_on_reply">Email me on replies</label>
                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary btn-lg">Post Your Review</button>
                </div>
            </div>
        </div>
    </details>
</form>
