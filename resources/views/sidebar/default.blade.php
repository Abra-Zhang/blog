<section>
    <hr class="hidden-sm hidden-md">
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
<!-- Short About -->
<section class="hidden-sm hidden-md">
    <hr>
    <h5><a href="{{ route('about') }}">ABOUT ME</a></h5>
    <div class="short-about">
        <img src="/images/arnold.jpg" />
        <p>搞搞前端，弄弄后端<br / >看起来像是做全栈的肥宅</p>
        <!-- SNS Link -->
        {{--<ul class="list-inline">--}}
        {{--</ul>--}}
    </div>
</section>