<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Product;
use App\Order;

class OrderController extends Controller
{
	/*public function orderinfo() {
		$orders = Order::all();
		return view('Order.buy', compact('orders'));
	}*/ 

	public function __construct() {
		$this->middleware('auth');
	}

	public function ordercreate() {
		$orders = Order::where('user_id', '=', Auth::user()->id)->get();
		//dd($orders);
		return view('Order.buy', compact('orders'));
		//return view('Order.buy');
	}

	public function orderstore(Request $request) {
		//$product_id = Product::find($request['id'])->value('price');
		//dd($product_id);
		$result_product = Product::where('id', '=', $request['id'])->value('price');
		$total_price =	$request['quantity'] * $result_product;
		Order::create([
			'quantity' => $request['quantity'],
			'total_price' => $total_price,
			'order_description' => $request['order_description'],
			'user_id' => Auth::user()->id
		]);

		return redirect('/order/buy');

	}

	public function destroy() {
		//dd($_POST['id']);
		Order::find($_POST['id'])->delete();

		return redirect('/order/buy');
	}
}
