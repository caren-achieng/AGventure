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
                    <h4 class="page-title">Create Post</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto m-0">
                            <li><a href="{{ route('articles.create') }}" class="btn btn-secondary text-light">Create Article</a> </li>
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
                <div class="col-lg-7 col-md-9 col-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Post title</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="What type of product are you uploading?"
                                           name="title">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput2" class="form-label">Product Price per KG</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="How much do you want to sell this product for?"
                                                   name="price">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput2" class="form-label">Available stock </label> <small><i>in KG</i></small>
                                            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="How many KGs of this product do you have?"
                                                   name="stock">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Product Description</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Give a brief description of your product."
                                           name="description">
                                </div>
                                <label>Upload Post Image</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="post" id="inputGroupFile02" required>
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                                <button type="submit" class="btn btn-primary"> CREATE</button>
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
