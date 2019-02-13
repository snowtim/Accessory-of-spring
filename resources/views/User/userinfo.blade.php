@extends('layouts.app')
<!DOCTYPE html>

	<html>

	<head>

		<title></title>

	</head>

	<body>

@section('content')
		<h1>Register your information</h1>
			
		<form method="POST" action="/userinfo">
			{{ csrf_field() }}

			<div class="field">
				<div class="control">
					User ID : <input type="text" name="user_id" placeholder="Your user ID">
				</div>
			</div>

			<div>
				Name : <input type="text" name="name" placeholder="Your name">
			</div>

			<div>
				E-mail : <input type="text" name="email" placeholder="Your email">
			</div>

			<div>
				Sex:
				Male<input type="radio" name="sex" value="1">
				Female<input type="radio" name="sex" value="0">
			</div>

			<div>
				Birthday : <input type="text" name="birthday" placeholder="Your birthday">
			</div>

			<div>
				Phone number : <input type="text" name="phone" placeholder="Your phone">
			</div>

			<div>
				Address : <input type="text" name="address" placeholder="Your address">
			</div>

			<div>
				Password : <input type="text" name="password" placeholder="password">
			</div>

			<div>
				<button type="submit">Send your information</button>
			</div>

	</body>

</form>
@endsection