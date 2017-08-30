@extends('common.default')
@section('title', '写文章')
@section('special_css')
{!! editor_css() !!}

@section('content')
<div id="editormd_id">
    <textarea name="content" style="display:none;"></textarea>
</div>
@stop
