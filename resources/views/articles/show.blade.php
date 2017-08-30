@extends('common.default')
@section('title', $article->name)

@section('content')
<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <div class="col-md-12">
        <h3>{{  $article->name  }}</h3>
        <div class="byline"></div>
        <div class="article-content">
            {{  $article->content  }}
        </div>
    </div>
  </div>
</div>
@stop
