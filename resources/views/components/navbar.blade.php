<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-center align-items-center">
            <div class="col-12 text-center">
                <a class="blog-header-logo text-dark" href="{{ route('index') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-center">
            <a class="p-2 text-muted" href="{{ route('index') }}">Home</a>
            <a class="p-2 text-muted" href="{{ route('posts.index') }}">Posts</a>
            {{--<a class="p-2 text-muted" href="{{ route('about') }}">About</a>--}}
        </nav>
    </div>
</div>
