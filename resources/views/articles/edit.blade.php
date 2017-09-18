@extends('common.default')
@section('title', $article->title . '编辑中')
@section('special_css')
{!! editor_css() !!}

@section('content')
<form action="{{  route('articles.update', $article->id)  }}" method="post">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{  Auth::user()->id  }}">

    <div class="form-group">
    <label>标题</label>
    <input type="text" class="form-control" name="title" placeholder="请在这里填写标题" value="{{ $article->title }}">
    <label>摘要</label>
    <input type="text" class="form-control" name="abstract" placeholder="请在这里填写摘要" value="{{ $article->abstract }}">
    <label>banner</label>
    <input type="text" class="form-control" name="banner" placeholder="首页banner图片地址" value="{{ $article->banner }}">
    </div>
    <div class="form-group">
        <label>正文</label>
        <div id="editormd_id">
            <textarea name="content" style="display:none;" value="{{ old('content') }}">{{ $article->content }}</textarea>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">提交</button>
</form>
@stop

@section('jshere')
{!! editor_js() !!}
@stop
