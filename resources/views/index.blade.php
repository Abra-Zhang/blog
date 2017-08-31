@extends('common.default')

@section('content')
  <ul class="articles">
    @foreach ($articles as $article)
      @include('index._article')
    @endforeach
  </ul>
@stop
