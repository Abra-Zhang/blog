@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 blog-list">
                @foreach($posts as $post)
                    <div class="blog-post">
                        <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3 >
                    </div>
                @endforeach

                {{ $posts->links('components.paginate') }}
            </div>
        </div>
    </div>
@endsection
