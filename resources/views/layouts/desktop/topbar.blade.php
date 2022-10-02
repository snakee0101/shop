<div class="site-header__topbar topbar">
    <div class="topbar__container container">
        <div class="topbar__row">
            {{--<div class="topbar__item topbar__item--link"><a class="topbar-link" href="about-us.html">About
                    Us</a></div>
            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="{{ route('contacts') }}">Contacts</a>
            </div>
            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="track-order.html">Track
                    Order</a></div>--}}
            <div class="topbar__spring"></div>
            <div class="topbar__item">
                <div class="topbar-dropdown">
                    <button class="topbar-dropdown__btn pr-2" type="button"><a href="{{ route('account') }}">My Account</a>
                    </button>
                </div>
            </div>
            <div class="topbar__item">
                <div class="topbar-dropdown">
                    <button class="topbar-dropdown__btn" type="button">Currency: <span
                            class="topbar__item-value">USD</span>
                        <svg width="7px" height="5px">
                            <use xlink:href="/images/sprite.svg#arrow-rounded-down-7x5"></use>
                        </svg>
                    </button>
                    <div class="topbar-dropdown__body"><!-- .menu -->
                        <ul class="menu menu--layout--topbar">
                            @foreach( config('region.currencies') as $currency => $symbol)
                                <li><a href="#">{{ $symbol }} {{ $currency }}</a></li>
                            @endforeach
                        </ul><!-- .menu / end --></div>
                </div>
            </div>
        </div>
    </div>
</div>
