@extends('layouts.app')

@section('content')

	@foreach($product as $item)
		Product : {{ $item->product_name }}</br>
		Description : {{ $item->description }}</br>
		Price : {{ $item->price }}</br>
	@endforeach

@endsection