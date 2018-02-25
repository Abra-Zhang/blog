<div class="post-preview">
    <a href="{{ route('post.show', ['post_id'=> $post->id]) }}">
        <h2 class="post-title">
            {{ $post->title }}
        </h2>
        <div class="post-content-preview">
            {{ $post->abstract }}
        </div>
    </a>
    <p class="post-meta">
        Posted by {{ $post->user->name }}, {{ $post->created_at }}
    </p>
</div>
<hr>