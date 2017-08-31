<li>
    @if($article->banner !== "#")
    <img class="banner" src="{{  $article->banner  }}" />
    @endif
    <div class="info">
    <img  class="gravatar"  src="{{  $article->user->gravatar(50)  }}" />
    <span class="name">{{  $article->user->name  }}</span>
    <span class="time">{{  $article->created_at  }}</span>
	<a href="{{ route('articles.show', $article->id )}}" class="title" target="_blank">{{ $article->title }}</a>
    <span class="abstract">{{  $article->abstract  }}</span>
    </div>
    <div class="clearfix"></div>
</li>
