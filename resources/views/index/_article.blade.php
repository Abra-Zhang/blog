<li>
    @if($article->banner !== "#")
    <img class="banner" src="{{  $article->banner  }}" />
    @endif
    <img  class="gravatar"  src="{{  $article->user->gravatar(50)  }}" />
    <div class="author">
	    <span class="name">{{  $article->user->name  }}</span>
	    <span class="time">{{  $article->created_at  }}</span>
	</div>
	<a href="{{ route('articles.show', $article->id )}}" class="title" target="_blank">{{ $article->title }}</a>
    <span class="abstract">{{  $article->abstract  }}</span>
    <div class="clearfix"></div>
</li>
