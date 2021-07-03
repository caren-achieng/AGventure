@extends('layouts.master')
@section('content')
<div>
{{-- <h1>Home</h1> --}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src={{ asset('imgs/tomatos.jpg')}} class="d-block w-100" alt="Tomatoes">
        </div>
        <div class="carousel-item">
        <img src={{ asset('imgs/market.jpg')}} class="d-block w-100" alt="Market">
      </div>
      <div class="carousel-item">
        <img src={{ asset('imgs/potatos.jpg')}} class="d-block w-100" alt="Potatoes">
      </div>
      <div class="carousel-item">
        <img src={{ asset('imgs/garlic.jpg')}} class="d-block w-100" alt="Garlic">
      </div>
    </div>
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> --}}
  </div>
    </div>
<div>
@endsection
