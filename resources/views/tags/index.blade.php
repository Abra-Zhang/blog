@extends('common.default')
@section('title', '标签')
@section('content')
    <div class="tags-index">
        <!-- Page Header -->
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading">
                            <h1>Tags</h1>
                            <span class="subheading">标签</span>
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
                tags-container
                ">
                    @if(count($tags) > 0)
                        <div class="tags">
                            @foreach($tags as $tag)
                                <a href="#{{ $tag->name }}" title="{{ $tag->name }}">
                                    {{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                        @foreach($tags as $tag)
                            <div class="tag-list">
                                <span class="tag-name" id="{{ $tag->name }}"># {{ $tag->name }}</span>
                                @foreach($tag->posts as $post)
                                    @include('posts._post')
                                @endforeach
                            </div>
                        @endforeach
                    @else
                        <div class="tags">
                            <a href="#" title="none">
                                还没有标签呢
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@stop