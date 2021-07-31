@extends('layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="articles">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Articles</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto m-0">
                            <li><a href="{{ route('articles.create') }}" class="btn btn-secondary text-light">Create Article</a></li>
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
                @foreach ( $articles as $article)
                    <div class="col-3">
                        <div class="card bg-secondary text-dark shadow">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="fw-bolder m-0 text-center">{{$article->title }}</h4>
                                    </div>
                                    <div class="col-auto border-start border-dark">
                                        <a href="{{ route('articles.destroy', ['id' => $article->id]) }}" title="Delete Article">
                                            <i class="fas fa-trash text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-dark position-relative">
                                <h5 class="fw-bold">Content</h5>
                                <hr class="my-2 bg-dark">
                                <p class="card-text text-white mb-0">{{ $article->content }}</p>
                                <small class="position-absolute bottom-0 p-2" style="right: 0">
                                    <span class="fw-bold">Date Created:</span> {{ date('M jS, Y', strtotime($article->created_at)) }}
                                </small>
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


{{-- <div class="w-4/5 m-auto text-left">
    <div class="py-15 ">
       <h1 class="text-6xl">
           Post Article

       </h1>
    </div>
</div>
@if ($errors->any())
<div class="w-4/5 m-auto">

<ul>
  @foreach ( $errors->all() as $error)

  <li class="w-1/5 mb-4 text-gray-100 bg-red-500 rounded-2xl py-4">
     {{$error}}
  </li>

  @endforeach
</ul>
</div>

@endif --}}

{{-- <div class="w-4/5 m-auto pt-20">
  <form action="/article"
  method="POST"
  enctype="multipart/form-data">
  @csrf

  <input type="text" name="title" placeholder="Title"
         class="bg-transparent border-b-2 w-full h-20 text-6xl ouline-none" >
         <textarea name="description" placeholder="Description.." class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">

         </textarea>

<div class="bg-grey-lighter pt-15">
             <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg trackinh-wide uppercase border border-blue cursor-pointer">
                 <span class="mt-2 text-base leading-normal">
                      Select a File
                 </span>
                 <input type="file" name="image" class="hidden">

             </label>
          </div>
          <button

          type="submit"
          class="uppercase mt-15 bg-blue-700 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">

           Submit Article
           </button>

  </form>

</div> --}}
