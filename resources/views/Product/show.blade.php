@extends('layouts.master')

@section('content')

	@foreach($product as $item)
		ID : {{ $item->id }}</br>
		Product : {{ $item->product_name }}</br>
		Description : {{ $item->description }}</br>
		Price : {{ $item->price }}</br>
	@endforeach
	<a href="/products/{{ $item->id }}/edit">Edit</a>
	<form method="POST" action="/order/buy">
		@csrf

		<div>
			<input name="id" type="hidden" value="{{ $item->id }}">
		</div>

		<div class="field">
			<div class="control">
			Quantity : <input type="text" name="quantity">
			</div>
		</div>

		<div class="field">
			<div class="control">
				<textarea name="order_description"></textarea>
			</div>
		</div>

		<div class="field">
			<div class="control">
					<button type="submit">Buy It!!</button>
			</div>
		</div>

	</form>

@endsection