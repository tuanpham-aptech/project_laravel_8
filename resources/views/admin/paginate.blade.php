@if ($paginator->hasPages())
<div class="row mt-4">
    <div class="col text-center">
        <div>
            <ul class=" pg-list d-flex float-right mr-2 ">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled pg-item" aria-disabled="true" >
                    <span aria-hidden="true">&lt;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lt;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled pg-item" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active pg-item" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="pg-item"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pg-item">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" >&gt;</a>
                </li>
            @else
                <li class="disabled pg-item" aria-disabled="true" >
                    <span aria-hidden="true">&gt;</span>
                </li>
            @endif
        </ul>
    </div>
</div>
</div>
@endif
<style>
    .pg-list .pg-item {
        margin-left: 15px;
        list-style: none;
        height: 30px;
        width:30px;
        border: 0.001px solid #cac6c6;
        border-radius: 50%;
    }
</style>
