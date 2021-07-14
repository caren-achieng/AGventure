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
   
  </div>
    </div>
<div>
@endsection
