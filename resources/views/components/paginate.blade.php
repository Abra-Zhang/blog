@if ($paginator->hasPages())
    <nav class="pagination blog-pagination" style="justify-content: space-between;">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="btn btn-outline-secondary disabled" tabindex="-1" aria-disabled="true">Older</a>
        @else
            <a class="btn btn-outline-primary" href="{{ $paginator->previousPageUrl() }}" rel="prev">Older</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn-outline-primary" href="{{ $paginator->nextPageUrl() }}" rel="next">Newer</a>
        @else
            <a class="btn btn-outline-secondary disabled" tabindex="-1" aria-disabled="true">Newer</a>
        @endif
    </nav>
@endif
