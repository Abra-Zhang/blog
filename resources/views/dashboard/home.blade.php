@extends('layouts.dashboard')

@section('css')
    {!! editor_css() !!}
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <h2><input id="postTitle" type="text" placeholder="标题"></h2>
                <div id="mdeditor">
                  <textarea id="postContent" class="form-control" name="content" style="display:none;"></textarea>
                </div>
            </div>
        </div>
        <button id="submit">提交</button>
    </div>
@endsection
@section('js')
    {!! editor_js() !!}
    {!! editor_config('mdeditor') !!}
    <script>
        $('#submit').click(function () {
            $.ajax({
                {{--url: "{{ route('posts.store') }}",--}}
                url: "{{ route('posts.store') }}",
                method: "post",
                dataType: "json",
                data: {
                    title: $('#postTitle').val(),
                    content: $('#postContent').val(),
                    userId: "{{ Auth::id() }}",
                },
                success: function(data) {
                    console.log(data)
                },
                  error:function(data){console.log(data.responseText)}
            })
        })
    </script>
@endsection
