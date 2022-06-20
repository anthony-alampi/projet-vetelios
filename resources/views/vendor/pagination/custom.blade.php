@if ($paginator->hasPages())

<ul class="pagination">
    @if ($paginator->onFirstPage())
        <li class="page-item disabled navigation-horizontale-gauche"><span class="page-link"><i class="fa-solid fa-arrow-left"></i></span></li>
    @else
        <li class="page-item navigation-horizontale-gauche"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev"><i class="fa-solid fa-arrow-left"></i></a></li>
    @endif

    @if ($paginator->hasMorePages())
        <li class="page-item navigation-horizontale-droite"><a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next"><i class="fa-solid fa-arrow-right"></i></a></li>
    @else
        <li class="page-item disabled navigation-horizontale-droite"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev"><i class="fa-solid fa-arrow-right"></i></a></li>
    @endif
</ul>
    
@endif