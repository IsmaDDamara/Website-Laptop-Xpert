@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

@foreach ($viewData["categories"] as $category)
<section class="product">
  <div class="container">
    <div class="title-section">
      <h3 class="text-center" style="color: #121212" >{{ $category->name }}</h3>
    </div>
    <div class="product__slider">
      <div class="slider">
        @foreach ($viewData["products"] as $product)
          @if ($product->category_id == $category->id)
          <div class="slider__box">
            <div class="slider-wrap">
              </div>
              <a class="clickable-product" href="{{ route('product.show', ['id'=> $product->getId()]) }}">
                <div class="slider__box__image">
                  <img class="image-slider" src="{{ asset('/storage/'.$product->getImage()) }}" alt="image slider">
                </div>
              </a>
              <div class="slider__box__content">
                <div class="block">
                  <a class="clickable-product">
                    <div class="block__title">
                      <a><h7 style="font-weight:400">{{ $product->getName() }}</h7></a>
                    </div>
                    <div class="block__action">
                      <div class="block__price">Rp {{ $product->getPrice() }}</div>
                      <div class="block__action__cart">
                        <a class="clickable-product" href="{{ route('product.show', ['id'=> $product->getId()]) }}">
                        <button type="button" class="btn btn-primary" onclick="addToCart(691)" style="background-color: #27303b;">view details</button>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            @endif
          @endforeach
          </div>
      </div>
    </div>
  </div>
</section>
@endforeach

@endsection
