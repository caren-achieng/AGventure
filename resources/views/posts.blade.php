@extends('layouts.guest')
@section('content')

    <div id="home" class="container-fluid">
        <div class="row">
            <div class="col p-5">
                <div class="row">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts" type="button" role="tab"
                                    aria-controls="posts" aria-selected="true">Posts
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="articles-tab" data-bs-toggle="tab" data-bs-target="#articles" type="button" role="tab"
                                    aria-controls="articles" aria-selected="false">Articles
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                            @if(count($farmer->posts) > 0)
                                <div class="row">
                                    @foreach($farmer->posts  as $post)
                                        <div class="col-3">
                                            <div class="card mb-3 shadow">
                                                @isset($post->image)
                                                    <img src="{{ asset("images/posts/$post->image") }}" class="card-img-top" alt="...">
                                                @else
                                                    <img src="{{ asset("images/default-user.png") }}" class="card-img-top" alt="No Post">
                                                @endisset
                                                <div class="card-body">
                                                    <h5 class="card-title text-center">{{ $post->product_name }}</h5>
                                                    <p>{{ $post->description }}</p>
                                                    <hr>
                                                    <p class="fw-bold text-center">{{ $post->price }}/=</p>
                                                    <div class="d-flex justify-content-between">
                                                        <p>{{ $post->stock }}</p>
                                                        <a href="#" class="btn btn-outline-primary card-text">Order</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="row h-100 align-items-center justify-content-center">
                                    <div class="col-auto">
                                        <hr>
                                        <h1>No Posts</h1>
                                        <hr>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="articles" role="tabpanel" aria-labelledby="articles-tab">
                            @if(count($farmer->articles) > 0)
                                <div class="row">
                                    @foreach($farmer->articles  as $article)

                                        <div class="col-3">
                                            <div class="card mb-3 shadow">
                                                <div class="card-header">
                                                    <h5 class="card-title text-center">{{ $article->title }}</h5>
                                                </div>
                                                <div class="card-body">
                                                    <p>{{ $article->content }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="row h-100 align-items-center justify-content-center">
                                    <div class="col-auto">
                                        <hr>
                                        <h1>No Articles</h1>
                                        <hr>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
