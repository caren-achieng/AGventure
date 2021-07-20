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
                                <li><a href="{{ Route('upload') }}" class="btn btn-secondary text-light">Create Post</a> </li>

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
                <div class="row">
                    @foreach ( $posts as $post)
                    <div class="col-3" >
                        <div class="card">
                            <img src="{{ asset('myposts/'.$post->image_name) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title mb-0"> Product Name: {{$post->product_name }}</h5>
                              <p class="card-text mb-0"> Product Price: {{ $post->product_price }}</p>
                              <p class="card-text mb-0">Available stock: {{ $post->available_stock }}</p>
                              <p class="card-text mb-0">Item Description: {{ $post->item_description }}</p>
                              {{-- <a href="#" class="btn btn-primary">BUY</a> --}}
                            </div>

                          </div>
                        </div>

                    @endforeach
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

@endsection
