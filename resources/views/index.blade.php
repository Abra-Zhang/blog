@extends('common.default')

@section('content')
    <div class="index">
        <!-- Page Header -->
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading">
                            <h1>Arnold Blog</h1>
                            <span class="subheading">————简单生活简单说</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="
                col-xl-8 offset-xl-1
                col-lg-8 offset-lg-1
                col-md-12
                col-sm-12
                col-12
                articles-container
                ">
                    @foreach($articles as $article)
                        <div class="article-preview">
                            <a href="{{ route('article.show', ['article_id'=> $article->id]) }}">
                                <h2 class="article-title">
                                    {{ $article->title }}
                                </h2>
                                <div class="article-content-preview">
                                    {{ $article->abstract }}
                                </div>
                            </a>
                            <p class="article-meta">
                                Posted by Arnold.zxy, {{ $article->created_at }}
                            </p>
                        </div>
                        <hr>
                    @endforeach

                </div>
                <div class="
                col-xl-3 offset-xl-0
                col-lg-3 offset-lg-0
                col-md-12
                col-sm-12
                col-12
                sidebar-container
                ">

                </div>
            </div>
        </div>
    </div>
@stop