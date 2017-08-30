@extends('common.default')
@section('title', '写文章')
@section('special_css')
{!! editor_css() !!}

@section('content')
<form action="{{  route('articles.store')  }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{  Auth::user()->id  }}">

    <div class="form-group">
    <label>标题</label>
    <input type="text" class="form-control" name="title" placeholder="请在这里填写标题">
    </div>
    <div class="form-group">
        <label>正文</label>
        <div id="editormd_id">
            <textarea name="content" style="display:none;"></textarea>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">提交</button>
</form>
@stop

@section('jshere')
{!! editor_js() !!}
@stop
