@extends('common.default')

@section('content')
<div class="col-md-offset-2 col-md-8">
	<div class="center-block">
	<ol class="index-articles">
	  @foreach ($articles as $article)
	    @include('index._article')
	  @endforeach
	</ol>
	{!! $articles->render() !!}
	</div>
</div>
@stop
