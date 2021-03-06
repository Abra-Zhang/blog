@extends('layouts.dashboard')

@section('css')
    {!! Editormd::css() !!}
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <h2><input id="postTitle" type="text" placeholder="标题" value="{{ $post->title }}"></h2>
                <div id="editormd_id">
                    <textarea id="postContent" class="form-control" name="content" style="display:none;">{{ $post->content }}</textarea>
                </div>
            </div>
        </div>
        <button id="submit">提交</button>
    </div>
@endsection
@section('js')
    {!! Editormd::js() !!}
    <script>
        $('#submit').click(function () {
            $.ajax({
                url: "{{ route('posts.update', $post->getRouteKey()) }}",
                method: "post",
                dataType: "json",
                data: {
                    action: 'edit',
                    title: $('#postTitle').val(),
                    content: $('#postContent').val(),
                    _method: "PATCH"
                },
                success: function(data) {
                    if (data.code === 0){
                        alert('提交修改成功');
                        location.href = " {{ route('dashboard.posts') }}"
                    }else{
                        alert('提交修改失败');
                    }
                },
                error:function(data){console.log(data.responseText)}
            })
        })
    </script>
@endsection
