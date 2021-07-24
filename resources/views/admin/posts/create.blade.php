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
                    <h4 class="page-title">Upload Product</h4>
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
            <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="What type of product are you uploading?"
                           name="product_name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Product Price per KG</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="How much do you want to sell this product for?"
                           name="price">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Available stock</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="How many KGs of this product do you have?"
                           name="stock">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Product Description</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Give a brief description of your product."
                           name="description">
                </div>
                <input type="file" name="file" required class="form-control"><br><br>
                <div class="progress">
                    <div class="bar"></div>
                    <div class="percent">0%</div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary"> UPLOAD</button>
            </form>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
@endsection
