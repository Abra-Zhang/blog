@extends('layouts.app')

@section('css')
    <style>
        .table td {
            padding: 1.75rem!important;
        }
    </style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 blog-list">
                    <table class="table table-striped">
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td><h4><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h4></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                {{ $posts->links('components.paginate') }}
            </div>
        </div>
    </div>
@endsection
