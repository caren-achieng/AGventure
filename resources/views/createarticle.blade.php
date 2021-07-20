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
                        <h4 class="page-title">Create New Article</h4>
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
                <div class="row">
                    <div class="col">
                        <form method="POST" action="{{ Route('written_articles') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Title</label>
                                <input required type="text" class="form-control" id="formGroupExampleInput" placeholder="Create title for your new article." name="title">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label" >Content</label>
                                <textarea required class="form-control" id="formGroupExampleInput2" placeholder="Begin writing..." name="content"></textarea>
                              </div>

                            <button type="submit" class="btn btn-primary"> SUBMIT ARTICLE</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

@endsection
