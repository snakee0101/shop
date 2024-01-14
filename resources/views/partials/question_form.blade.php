<form class="reviews-view__form mt-0 pt-0 mb-5" method="post" action="{{ route('question.store') }}" enctype="multipart/form-data">
    @csrf
    <details>
        <summary class="h2 mb-4">
            Write A Question
        </summary>
        <div class="row">
            <div class="col-12 col-lg-9 col-xl-8">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="form-group"><label for="question-text">Your Question</label>
                    <textarea class="form-control" id="question-text" rows="6" name="comment">{{ old('comment') }}</textarea>
                    @error('comment')
                        <p class="text-danger">Question text is required</p>
                    @enderror
                </div>
                <new-video-container-component>

                </new-video-container-component>
                <new-photo-container-component>

                </new-photo-container-component>
                <div class="custom-control custom-checkbox mb-4">
                    <input type="checkbox" class="custom-control-input" id="notify_on_reply" name="notify_on_reply">
                    <label class="custom-control-label" for="notify_on_reply">Email me on replies</label>
                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary btn-lg">Post Your Question</button>
                </div>
            </div>
        </div>
    </details>
</form>
