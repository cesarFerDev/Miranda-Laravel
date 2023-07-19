@if ($paginator->hasPages())
    <nav>
        <ul class="paginator">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="paginator__element" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="paginator__text" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                <li class="paginator__element">
                    <span class="paginator__text">&lsaquo;</span>
                </li>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="paginator__element" aria-disabled="true"><span class="paginator__text">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="paginator__element paginator__element--active" aria-current="page"><span class="paginator__text">{{ $page }}</span></li>
                        @else
                            <a href="{{ $url }}"><li class="paginator__element"><span class="paginator__text">{{ $page }}</span></li></a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                <li class="paginator__element">
                    <span>&rsaquo;</span>
                </li></a>
            @else
                <li class="paginator__element" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="paginator__text" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
