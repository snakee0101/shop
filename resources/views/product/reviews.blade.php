@extends('product.main')

@section('reviews')
    <div class="reviews-view">
        <form class="reviews-view__form mt-0 pt-0 mb-5">
            <details>
                <summary class="h2 mb-4">
                    Write A Review
                </summary>
                <div class="row">
                    <div class="col-12 col-lg-9 col-xl-8">
                        <div class="form-row">
                            <div class="form-group col-md-4"><label for="review-stars">Review
                                    Stars</label> <select id="review-stars" class="form-control">
                                    <option>5 Stars Rating</option>
                                    <option>4 Stars Rating</option>
                                    <option>3 Stars Rating</option>
                                    <option>2 Stars Rating</option>
                                    <option>1 Stars Rating</option>
                                </select></div>
                            <div class="form-group col-md-4"><label for="review-author">Your
                                    Name</label> <input type="text" class="form-control"
                                                        id="review-author" placeholder="Your Name">
                            </div>
                            <div class="form-group col-md-4"><label for="review-email">Email
                                    Address</label> <input type="text" class="form-control"
                                                           id="review-email"
                                                           placeholder="Email Address"></div>
                        </div>
                        <div class="form-group"><label for="review-text">Your Review</label>
                            <textarea class="form-control" id="review-text" rows="6"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-lg">Post Your Review
                            </button>
                        </div>
                    </div>
                </div>
            </details>
        </form>

        <div class="reviews-view__list"><h3 class="reviews-view__header">Customer Reviews</h3>
            <div class="reviews-list">
                <ol class="reviews-list__content">
                    <li class="reviews-list__item">
                        <div class="review">
                            <div class="review__avatar"><img src="/images/avatars/avatar-1.jpg"
                                                             alt=""></div>
                            <div class="review__content">
                                <div class="review__author">Samantha Smith</div>
                                <div class="review__rating">
                                    <div class="rating">
                                        <div class="rating__body">
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star" width="13px"
                                                 height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review__text">Phasellus id mattis nulla. Mauris
                                    velit nisi, imperdiet vitae sodales in, maximus ut lectus.
                                    Vivamus commodo scelerisque lacus, at porttitor dui iaculis
                                    id. Curabitur imperdiet ultrices fermentum.
                                </div>
                                <div class="review__date">27 May, 2018</div>
                            </div>
                        </div>
                    </li>
                    <li class="reviews-list__item">
                        <div class="review">
                            <div class="review__avatar"><img src="/images/avatars/avatar-2.jpg"
                                                             alt=""></div>
                            <div class="review__content">
                                <div class="review__author">Adam Taylor</div>
                                <div class="review__rating">
                                    <div class="rating">
                                        <div class="rating__body">
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star" width="13px"
                                                 height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star" width="13px"
                                                 height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review__text">Aenean non lorem nisl. Duis tempor
                                    sollicitudin orci, eget tincidunt ex semper sit amet. Nullam
                                    neque justo, sodales congue feugiat ac, facilisis a augue.
                                    Donec tempor sapien et fringilla facilisis. Nam maximus
                                    consectetur diam. Nulla ut ex mollis, volutpat tellus vitae,
                                    accumsan ligula.
                                </div>
                                <div class="review__date">12 April, 2018</div>
                            </div>
                        </div>
                    </li>
                    <li class="reviews-list__item">
                        <div class="review">
                            <div class="review__avatar"><img src="/images/avatars/avatar-3.jpg"
                                                             alt=""></div>
                            <div class="review__content">
                                <div class="review__author">Helena Garcia</div>
                                <div class="review__rating">
                                    <div class="rating">
                                        <div class="rating__body">
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active"
                                                 width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use
                                                        xlink:href="/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div
                                                class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review__text">Duis ac lectus scelerisque quam
                                    blandit egestas. Pellentesque hendrerit eros laoreet
                                    suscipit ultrices.
                                </div>
                                <div class="review__date">2 January, 2018</div>
                            </div>
                        </div>
                    </li>
                </ol>
                <div class="reviews-list__pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a
                                class="page-link page-link--with-arrow" href="#"
                                aria-label="Previous">
                                <svg class="page-link__arrow page-link__arrow--left"
                                     aria-hidden="true" width="8px" height="13px">
                                    <use
                                        xlink:href="/images/sprite.svg#arrow-rounded-left-8x13"></use>
                                </svg>
                            </a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link page-link--with-arrow"
                                                 href="#" aria-label="Next">
                                <svg class="page-link__arrow page-link__arrow--right"
                                     aria-hidden="true" width="8px" height="13px">
                                    <use
                                        xlink:href="/images/sprite.svg#arrow-rounded-right-8x13"></use>
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
