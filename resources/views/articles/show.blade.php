@extends('common.default')
@section('title', $article->title)
@section('special_css')
{!! editor_css() !!}

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="article-header">
            <h1>{{  $article->title  }}</h1><br />
            <div class="byline">{{  $article->created_at  }} By {{  $article->author  }} </div>
        </div>
        <div class="article-content">
            <div id="wordsView">
                <textarea style="display:none;" name="editormd-markdown-doc">{{  $article->content  }}</textarea>
            </div>
        </div>
    </div>
</div>
@stop

@section('jshere')
<script src="/vendor/editormd/js/editormd.js"></script>
<script src="/vendor/editormd/lib/marked.min.js"></script>
<script src="/vendor/editormd/lib/prettify.min.js"></script>
<script src="/vendor/editormd/lib/raphael.min.js"></script>
<script src="/vendor/editormd/lib/underscore.min.js"></script>
<script src="/vendor/editormd/lib/sequence-diagram.min.js"></script>
<script src="/vendor/editormd/lib/flowchart.min.js"></script>
<script src="/vendor/editormd/lib/jquery.flowchart.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var wordsView;
        wordsView = editormd.markdownToHTML("wordsView", {
            htmlDecode      : "style,script,iframe",  // you can filter tags decode
            emoji           : true,
            taskList        : true,
            tex             : true,  // 默认不解析
            flowChart       : true,  // 默认不解析
            sequenceDiagram : true,  // 默认不解析
        });

    })
</script>
@stop
