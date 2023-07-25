@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/img/banner1.png') }}" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/banner2.png') }}" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/banner3.png') }}" class="d-block w-100" alt="Slide 3">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/banner4.png') }}" class="d-block w-100" alt="Slide 4">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/banner5.png') }}" class="d-block w-100" alt="Slide 5">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection

@section('contentpromo')
  <div class="mb-2">
  <h2 class="text-center" style="color: #121212">Our Products</h2>
</div>
@endsection

@section('content2')
<div class="container text-center">
<div class="row">
  <div class="col-md-6 col-lg-4 mb-2">
    <a href="{{ route('product.laptop') }}"><img src="{{ asset('/img/Laptop.jpg') }}" class="img-fluid rounded"> </a>
    <a><h4 style="color:grey">Laptop</h4></a>
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <a href="{{ route('product.pc') }}"><img src="{{ asset('/img/Pc.jpg') }}" class="img-fluid rounded"> </a>
    <h4 style="color:grey">Pc</h4>
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <a href="{{ route('product.processor') }}"><img src="{{ asset('/img/Processor.jpg') }}" class="img-fluid rounded"> </a>
    <h4 style="color:grey">Processor</h4>
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <a href="{{ route('product.gaming') }}"><img src="{{ asset('/img/Gaming.jpg') }}" class="img-fluid rounded"></a>
    <h4 style="color:grey">Gaming</h4>
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <a href="{{ route('product.audio') }}"><img src="{{ asset('/img/Audio.jpg') }}" class="img-fluid rounded"></a>
    <h4 style="color:grey">Audio</h4>
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <a href="{{ route('product.accessories') }}"><img src="{{ asset('/img/Accessories.jpg') }}" class="img-fluid rounded"></a>
    <h4 style="color:grey">Accessories</h4>
  </div>
</div>
</div>

@endsection