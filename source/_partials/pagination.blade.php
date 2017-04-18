<div class="pagination">

    @if ( ($previous = $pagination->previous) !== NULL )
        <a href="{{ $page->site->baseurl }}{{ $pagination->first ?: '/' }}"> &lt;&lt; </a>
        <a href="{{ $page->site->baseurl }}{{ $previous ?: '/' }}"> &lt; </a>
    @else
        &lt;&lt; &lt;
    @endif

    @foreach ($pagination->pages as $pageNumber => $path)
        @if($pagination->currentPage == $pageNumber)
            <ins>{{$pageNumber}}</ins>
        @else
            <a href="{{ $page->site->baseurl }}{{ $path ?: '/' }}" >{{ $pageNumber }}</a>
        @endif
    @endforeach

    @if ($next = $pagination->next)
        <a href="{{ $page->site->baseurl }}{{ $next }}"> &gt; </a>
        <a href="{{ $page->site->baseurl }}{{ $pagination->last }}"> &gt;&gt; </a>
    @else
        &gt; &gt;&gt;
    @endif

</div>