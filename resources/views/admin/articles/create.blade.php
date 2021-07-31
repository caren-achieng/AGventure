@extends('layouts.app')
@section('content')


    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Create Article</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto m-0">
                            <li><a href="{{ route('posts.create') }}" class="btn btn-secondary text-light">Create Post</a> </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-9 col-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <form method="POST" action="{{ Route('articles.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Title</label>
                                    <input required type="text" class="form-control" id="formGroupExampleInput"
                                           placeholder="Title for your new article." name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Content</label>
                                    <textarea required class="form-control" id="formGroupExampleInput2" placeholder="Begin writing..."
                                              name="content" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">CREATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

@endsection
