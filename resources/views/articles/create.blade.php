@extends('common.default')
@section('title', '写文章')
@section('special_css')
{!! editor_css() !!}

@section('content')
<div id="editormd_id" style="margin-top:70px">
    <textarea name="content" style="display:none;"></textarea>
</div>

@section('jshere')
{!! editor_js() !!}

@stop
