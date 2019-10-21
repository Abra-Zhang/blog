@extends('layouts.app')

@section('content')

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">

                @foreach($posts as $i => $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title"><a href="{{ route('posts.show', $post->getRouteKey()) }}">{{ $post->title }}</a></h2>
                        <p class="blog-post-meta">{{ $post->created_at }} by {{ $post->user->name }}</p>

                        <div id="post-{{ $i }}">
                            <textarea class="form-control" name="content" style="display:none;">{{ Str::limit($post->content, 300, ' ... ') }}</textarea>
                        </div>
                        <a href="{{ route('posts.show', $post->getRouteKey()) }}">阅读更多</a>
                    </div><!-- /.blog-post -->
                @endforeach
                {{ $posts->links('components.paginate') }}

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                {{--<div class="p-4 mb-3 bg-light rounded">--}}
                    {{--<h4 class="font-italic">About</h4>--}}
                    {{--<p class="mb-0"></p>--}}
                {{--</div>--}}

                {{--<div class="p-4">--}}
                    {{--<h4 class="font-italic">Archives</h4>--}}
                    {{--<ol class="list-unstyled mb-0">--}}
                        {{--<li><a href="#">March 2014</a></li>--}}
                        {{--<li><a href="#">February 2014</a></li>--}}
                        {{--<li><a href="#">January 2014</a></li>--}}
                        {{--<li><a href="#">December 2013</a></li>--}}
                        {{--<li><a href="#">November 2013</a></li>--}}
                        {{--<li><a href="#">October 2013</a></li>--}}
                        {{--<li><a href="#">September 2013</a></li>--}}
                        {{--<li><a href="#">August 2013</a></li>--}}
                        {{--<li><a href="#">July 2013</a></li>--}}
                        {{--<li><a href="#">June 2013</a></li>--}}
                        {{--<li><a href="#">May 2013</a></li>--}}
                        {{--<li><a href="#">April 2013</a></li>--}}
                    {{--</ol>--}}
                {{--</div>--}}
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection
@section('js')
    <script src="/vendor/editormd/js/editormd.min.js"></script>
    <script src="/vendor/editormd/lib/marked.min.js"></script>
    <script src="/vendor/editormd/lib/prettify.min.js"></script>
    <script src="/vendor/editormd/lib/raphael.min.js"></script>
    <script src="/vendor/editormd/lib/underscore.min.js"></script>
    <script src="/vendor/editormd/lib/sequence-diagram.min.js"></script>
    <script src="/vendor/editormd/lib/flowchart.min.js"></script>
    <script src="/vendor/editormd/lib/jquery.flowchart.min.js"></script>
    <script type="text/javascript">
        // 首页博客数组
        var posts = @json($posts).data;
        $(document).ready(function() {
            $.each(posts, function(index, post){
                var wordsView;
                wordsView = editormd.markdownToHTML("post-"+ index, {
                    htmlDecode      : "style,script,iframe",  // you can filter tags decode
                    emoji           : true,
                    taskList        : true,
                    tex             : true,  // 默认不解析
                    flowChart       : true,  // 默认不解析
                    sequenceDiagram : true,  // 默认不解析
                });
            })
        })
    </script>
@endsection
