@extends('layouts.app')

@section('content')

	<h1>Product</h1>

			@foreach($products as $product)
				<a href="/products/{{ $product->id }}">
				<li>{{ $product->product_name }}</li></a>
			@endforeach

@endsection
