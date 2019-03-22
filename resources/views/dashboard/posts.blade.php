@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">博客标题</th>
                        <th scope="col">状态</th>
                        <th scope="col">创建时间</th>
                        <th scope="col">更新时间</th>
                        <th scope="col">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $posts as $post )
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td><a href="{{ route('posts.show', $post->getRouteKey()) }}">{{ $post->title }}</a></td>
                            <td>
                                @if($post->status)
                                    已发布
                                @else
                                    未发布
                                @endif
                            </td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td>
                                <a href="{{ route('posts.edit', $post->getRouteKey()) }}">编辑</a>
                                <a href="#" id="publish" onclick="switchPublish('{{ route('posts.update', $post->getRouteKey()) }}')">更改发布状态</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function switchPublish( url ) {
            $.ajax({
                url: url,
                method: "post",
                dataType: "json",
                data: {
                    action: 'publish',
                    _method: 'PATCH'
                },
                success: function(data) {
                    console.log(data)
                    if (data.code === 0){
                        alert('状态修改成功')
                        location.href = " {{ route('dashboard.posts') }}"
                    }else{
                        alert('状态修改失败')
                    }
                },
                error:function(data){console.log(data.responseText)}
            })
        }
    </script>
@endsection