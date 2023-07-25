@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class='container-fluid'>
	<div class="container">
		<div class="title-section">
			<h2 class="text-center" style="color: #121212">LAPTOP</h2>
		</div>
		<div class="row">
			@foreach ($viewData["products"] as $product)
			@if ($product->category_id == '1')
			<div class="col-md-3 col-sm-6">
				<div class="card mt-5">
					<img class="img-thumbnail mx-auto d-block" src="{{ asset('/storage/'.$product->getImage()) }}" style=" border: none; width: 70%; height: 150px;">
					<div class="card-body text-center">
						<div class='cvp'>
							<h7 class="card-title" >{{ $product->getName() }}</h7>
							<p class="card-text" style="font-weight: bold;">Rp{{ $product->getPrice() }}</p>
							<a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn details px-auto">view details</a><br />
						</div>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
</div>

@endsection
