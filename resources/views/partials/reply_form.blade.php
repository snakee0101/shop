<form class="reviews-view__form mt-0 pt-0" method="post" action="{{ route('reply.store') }}">
    @csrf
    <details>
        <summary class="h6">
            Write A Reply
        </summary>
        <div class="row">
            <div class="col-12 col-lg-9 col-xl-8">
                <input type="hidden" name="object_type" value="{{ $review::class }}">
                <input type="hidden" name="object_id" value="{{ $review->id }}">
                <div class="form-group"><label for="review-text">Your Reply</label>
                    <textarea class="form-control" id="review-text" rows="6" name="text">{{ old('text') }}</textarea>
                    @error('text')
                        <p class="text-danger">Reply text is required</p>
                    @enderror
                </div>
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary btn-lg">Post Your Reply</button>
                </div>
            </div>
        </div>
    </details>
</form>
