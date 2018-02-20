<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-custom fixed-top">
    <a class="navbar-brand" href="#">Arnold Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#arnold-navbar" aria-controls="arnold-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="arnold-navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('articles') }}">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tags') }}">Tags</a>
            </li>
        </ul>
    </div>
</nav>

