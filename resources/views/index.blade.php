@extends('common.default')

@section('content')
<div class="row">
<div class="col-md-8">
	<div class="center-block">
	<ol class="index-articles">
	  @foreach ($articles as $article)
	    @include('index._article')
	  @endforeach
	</ol>
	{!! $articles->render() !!}
	</div>
</div>
</div>
@stop
