@extends('common.default')

@section('content')
<div class="jumbotron" style="background-image: url(/static/images/index_banner.jpg);background-position: center ;">
  <h1 style="text-align: center;">Abra.Z Blog</h1>
  <p style="text-align: center;">简单生活，简单说</p>
</div>
<div class="col-md-offset-2 col-md-8">
	<ol class="index-articles">
	  @foreach ($articles as $article)
	    @include('index._article')
	  @endforeach
	</ol>
	{!! $articles->render() !!}
</div>
@stop
