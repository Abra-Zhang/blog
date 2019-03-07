@extends('layouts.dashboard')

@section('css')
    {!! editor_css() !!}
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <h2>{{ $post->title }}</h2>
                <div id="wordsView">
                    <textarea id="postContent" class="form-control" name="content" style="display:none;">{{ $post->content }}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
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
@endsection
