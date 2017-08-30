@extends('common.default')
@section('title', '文章列表')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>文章列表</h1>
  <ul class="articles">
    @foreach ($articles as $article)
      @include('articles._article')
    @endforeach
  </ul>

  {!! $articles->render() !!}
</div>
@stop
