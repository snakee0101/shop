<ul class="pagination justify-content-center">
    <li class="page-item {{ ($paginator->currentPage() == 1) ? 'disabled' : '' }}">
        <a class="page-link page-link--with-arrow" href="{{ $paginator->url( $paginator->currentPage() - 1 ) . '#reviews' }}" aria-label="Previous">
            <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px"
                 height="13px">
                <use xlink:href="/images/sprite.svg#arrow-rounded-left-8x13"></use>
            </svg>
        </a>
    </li>
    @for($page = 1; $page < $paginator->lastPage() + 1; $page++)
        <li class="page-item {{ ($page == $paginator->currentPage()) ? 'active' : '' }}">
            <a class="page-link" href="{{ ($page == $paginator->currentPage()) ? '#reviews' : $paginator->url($page) . '#reviews' }}">{{ $page }}</a>
        </li>
    @endfor
    <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? 'disabled' : '' }}">
        <a class="page-link page-link--with-arrow" href="{{ $paginator->url( $paginator->currentPage() + 1 ) . '#reviews' }}" aria-label="Next">
            <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                <use xlink:href="/images/sprite.svg#arrow-rounded-right-8x13"></use>
            </svg>
        </a>
    </li>
</ul>
