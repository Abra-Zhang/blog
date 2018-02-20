<div class="article-preview">
    <a href="{{ route('article.show', ['article_id'=> $article->id]) }}">
        <h2 class="article-title">
            {{ $article->title }}
        </h2>
        <div class="article-content-preview">
            {{ $article->abstract }}
        </div>
    </a>
    <p class="article-meta">
        Posted by {{ $article->user->name }}, {{ $article->created_at }}
    </p>
</div>
<hr>