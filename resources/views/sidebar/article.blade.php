<section>
    <hr>
    <h5><a href="{{ route('tags') }}">FEATURED TAGS</a></h5>
    <div class="tags">
        @if(count($tags) > 0)
            @foreach($tags as $tag)
                <a href="{{ route('tags') }}/#{{ $tag->name }}" title="{{ $tag->name }}">
                    {{ $tag->name }}
                </a>
            @endforeach
        @else
            <a href="#" title="none">
                还没有标签呢
            </a>
        @endif
    </div>
</section>