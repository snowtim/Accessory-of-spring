@extends('layouts.master')

@section('content')

	@foreach($orders as $order)
		Quantity : {{ $order->quantity }}</br>
		Total Price : {{ $order->total_price }}</br>
		Order Description : {{ $order->order_description }}
		<form method="POST" action="/order/buy">
			@method('DELETE')
			@csrf
			<div class="field">
				<div class="control">
					<input name="id" type="hidden" value="{{ $order->id }}">
					<button type="sumbit">Cancel</button></br>
				</div>
			</div>
		</form>
	@endforeach

@endsection