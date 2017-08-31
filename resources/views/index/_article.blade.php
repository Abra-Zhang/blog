<li>
    <div class="content">
        @if($article->banner !== "#")
        <div class="banner">
            <img src="{{  $article->banner  }}" height="150" width="150"/>
        </div>
        @endif
        <div class="author">
            <img  class="avatar"  src="{{  $article->user->gravatar(32)  }}" />
            <span>{{  $article->user->name  }}</span>
            <span class="time">{{  $article->created_at  }}</span>
        </div>
        <a href="{{ route('articles.show', $article->id )}}" class="article-title" target="_blank">{{ $article->title }}</a>
        <p class="abstract">
          {{  $article->abstract  }}
        </p>
    </div>
</li>
