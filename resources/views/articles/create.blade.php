@extends('common.default')
@section('title', '写文章')
@section('special_css')
{!! editor_css() !!}

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div id="editormd_id">
        <textarea name="content" style="display:none;"></textarea>
    </div>
</div>

@section('jshere')
{!! editor_js() !!}

@stop
