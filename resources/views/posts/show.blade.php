@extends('common.default')
@section('title', $post->title)
@section('specialCss')
    {!! editor_css() !!}

@section('content')
    <div class="post">
        <!-- Page Header -->
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading">
                            <h1>{{  $post->title  }}</h1>
                            <span class="subheading">Posted by {{ $post->user->name }}, {{ $post->created_at }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="
                col-xl-8 offset-xl-2
                col-lg-10 offset-lg-1
                col-md-10 offset-md-1
                col-sm-12 offset-sm-0
                col-12
                post-container">
                    <div id="wordsView">
                        <textarea style="display:none;" name="editormd-markdown-doc">{{  $post->content  }}</textarea>
                    </div>
                </div>
                <div class="
                col-xl-8 offset-xl-2
                col-lg-10 offset-lg-1
                col-md-10 offset-md-1
                col-sm-12 offset-sm-0
                col-12
                sidebar-container
                ">
                    @include('sidebar.post', ['tags'=> $tags])
                </div>
            </div>
        </div>
    </div>
@stop

@section('specialJs')
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
