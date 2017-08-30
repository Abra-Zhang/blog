@extends('common.default')
@section('title', $article->title . '编辑中')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>{{  $article->title  }}</h5>
    </div>
      <div class="panel-body">
      </div>
  </div>
</div>
@stop
