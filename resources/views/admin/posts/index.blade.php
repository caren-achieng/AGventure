@extends('layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="myfeed">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Posts</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto m-0">
                            <li><a href="{{ Route('posts.create') }}" class="btn btn-secondary text-light">Create Post</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="accordion accordion-flush" id="accordionFlush">
                <div class="row">
                    @foreach ( $posts as $post)
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('images/posts/'.$post->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="row border-bottom">
                                            <div class="col">
                                                <h4 class="fw-bold text-center">{{$post->title }}</h4>
                                            </div>
                                            <div class="col-auto border-start border-warning">
                                                <a href="{{ route('posts.destroy', ['id' => $post->id]) }}" title="Delete Post">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <table class="table table-sm table-hover">
                                        <thead>
                                        <tr>
                                            <th>Price</th>
                                            <th>Stock</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{ $post->price }}/=</td>
                                            <td>{{ $post->stock }}Kg</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{ $post->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Description
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $post->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                             data-bs-parent="#accordionFlush">
                                            <div class="accordion-body">
                                                {{ $post->description }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

@endsection
