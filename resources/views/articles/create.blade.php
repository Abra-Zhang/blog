@extends('common.default')
@section('title', '写文章')
@section('special_css')
{!! editor_css() !!}

@section('content')
<form action="{{  route('articles.store')  }}" method="post">
    <div id="editormd_id">
        <textarea name="content" style="display:none;"></textarea>
    </div>
    {{ csrf_field() }}
    <button class="btn btn-primary" type="submit">提交</button>
</form>
@stop
