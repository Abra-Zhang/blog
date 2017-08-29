<li>
    <a href="{{ route('articles.show', $article->id )}}" class="articlename">{{ $article->name }}</a>

    @can('destroy', $article)
      <form action="{{ route('articles.destroy', $article->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
      </form>
    @endcan

    @can('update', $article)
        <form>
          <button type="submit" class="btn btn-sm btn-primary update-btn">编辑</button>
        </form>
    @endcan
</li>
