<div class="block-sidebar__item">
    <div class="widget-newsletter widget"><h4 class="widget-newsletter__title">Our
            Newsletter</h4>
        <div class="widget-newsletter__text">Provide your email to subscribe to newsletter
        </div>
        <form class="widget-newsletter__form" action="{{ route('news.subscribe') }}" method="post">
            @csrf
            <label for="widget-newsletter-email" class="sr-only">EmailAddress</label>
            <input id="widget-newsletter-email" type="text" class="form-control" placeholder="Email Address" name="email">

            <button type="submit" class="btn btn-primary mt-3">Subscribe</button>
        </form>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="footer-newsletter__text footer-newsletter__text--social text-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @if(session()->has('confirmation_message'))
            <div class="footer-newsletter__text footer-newsletter__text--social text-success">
                {{ session()->get('confirmation_message') }}
            </div>
        @endif
    </div>
</div>
