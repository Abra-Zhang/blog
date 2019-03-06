@extends('layouts.dashboard')

@section('css')
    {!! editor_css() !!}
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <h2><input id="postTitle" type="text" placeholder="标题"></h2>
                <div id="editormd_id">
                  <textarea id="postContent" class="form-control" name="content" style="display:none;"></textarea>
                </div>
            </div>
        </div>
        <button id="submit">提交</button>
    </div>
@endsection
@section('js')
    {!! editor_js() !!}
    <script>
        $('#submit').click(function () {
            $.ajax({
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
                    if (data.code === 0){
                        alert('提交成功')
                        location.href = " {{ route('dashboard.posts') }}"
                    }else{
                        alert('提交失败')
                    }
                },
                  error:function(data){console.log(data.responseText)}
            })
        })
    </script>
@endsection
