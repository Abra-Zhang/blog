@extends('layouts.app')

@section('css')
    {!! editor_css() !!}
@endsection
@section('content')
    <div class="container post-show">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">{{ $post->title }}</h1>
                <div id="wordsView">
                    <textarea id="postContent" class="form-control" name="content" style="display:none;">{{ $post->content }}</textarea>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-3">
            <ul class="col-md-8 offset-md-2 relate-links pt-2 pb-2">
                @if($next)
                    <li><span>下一篇：</span><a href="{{ route('posts.show', $next->getRouteKey()) }}">{{ $next->title }}</a></li>
                @else
                    <li><span>下一篇：</span><a>没有了</a></li>
                @endif
                @if($previous)
                    <li><span>上一篇：</span><a href="{{ route('posts.show', $previous->getRouteKey()) }}">{{ $previous->title }}</a></li>
                @else
                    <li><span>上一篇：</span><a>没有了</a></li>
                @endif
            </ul>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- 来必力City版安装代码 -->
                <div id="lv-container" data-id="city" data-uid="MTAyMC8zNjcwMy8xMzIzOA==">
                    <script type="text/javascript">
                        (function(d, s) {
                            var j, e = d.getElementsByTagName(s)[0];

                            if (typeof LivereTower === 'function') { return; }

                            j = d.createElement(s);
                            j.src = 'https://cdn-city.livere.com/js/embed.dist.js';
                            j.async = true;

                            e.parentNode.insertBefore(j, e);
                        })(document, 'script');
                    </script>
                    <noscript>为正常使用来必力评论功能请激活JavaScript</noscript>
                </div>
                <!-- City版安装代码已完成 -->
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
