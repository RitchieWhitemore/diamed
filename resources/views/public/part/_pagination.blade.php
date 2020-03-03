@if ($paginator->hasPages())
    <nav class="review-page__pagination pagination">
        <ul class="pagination__list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pagination__item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="pagination__link pagination__link--prev"><i
                                class="fas fa-chevron-left"></i></span>
                </li>
            @else
                <li class="pagination__item">
                    <a href="{{ $paginator->previousPageUrl() }}" class="pagination__link pagination__link--prev"
                       rel="prev" aria-label="@lang('pagination.previous')"><i
                                class="fas fa-chevron-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="pagination__item disabled" aria-disabled="true"><span
                                class="pagination__link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination__item" aria-current="page"><span
                                        class="pagination__link pagination__link--active">{{ $page }}</span></li>
                        @else
                            <li class="pagination__item"><a href="{{ $url }}" class="pagination__link">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination__item">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"
                       class="pagination__link pagination__link--next"><i
                                class="fas fa-chevron-right"></i></a>
                </li>
            @else
                <li class="pagination__item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true" class="pagination__link pagination__link--next"><i
                                class="fas fa-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif