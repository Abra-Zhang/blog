@extends('common.default')
@section('title', '博文列表')
@section('content')
    <div class="posts-index">
        <!-- Page Header -->
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading">
                            <h1>Post Lists</h1>
                            <span class="subheading">博文列表</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="
                col-xl-8 offset-xl-2
                col-lg-8 offset-lg-2
                col-md-12
                col-sm-12
                col-12
                posts-container
                ">
                    @foreach($posts as $post)
                        @include('posts._post')
                    @endforeach

                    <div class="float-right">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop