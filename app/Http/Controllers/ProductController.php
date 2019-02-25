<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;

class ProductController extends Controller
{	
	/*protected function validator(array $productdata) {
		return Validator::make($productdate, [
			'product_id' => ['required', 'string', 'max:255'],
			'product_name' => ['required', 'string', 'max:255'],
			'description' => ['required', 'string', 'max:255'],
			'price' => ['required', 'string']
		]);
	}*/

	public function productindex() {

		$products = Product::all();

		return view('Product.product', compact('products'));

	}

	public function create() {

		//$user_right = Auth::user()->adminright;
		//dd($user_right);

		if(Auth::user()->adminright) {
			return view('Product.create');
		} else {
			return view('home');
		}

	}

	public function store(Request $request) {

		$validator = Validator::make($request->all(), [
			'product_id' => ['required', 'string', 'max:255'],
			'product_name' => ['required', 'string', 'max:255'],
			'description' => ['required', 'string', 'max:255'],
			'price' => ['required', 'string']
		]);

		Product::create([
			'product_id' => $request['product_id'],
			'product_name' => $request['product_name'],
			'description' => $request['description'],	
			'price' => $request['price']
		]);

		return redirect('/products');

	}

	public function show($id) {

		$product = Product::where('id', '=', $id)->get(); 

		return view('Product.show', compact('product'));

	}

	public function edit($id) {

		$product = Product::find($id);

		return view('Product.edit', compact('product'));

	}

	public function update(Request $request, $id) {

		//dd($id);

		$validator = Validator::make($request->all(), [
			'product_name' => ['required', 'string', 'max:255'],
			'description' => ['requ1ired', 'string', 'max:255'],
			'price' => ['required', 'string']
		]);


		$product = Product::where('id', '=', $id)->update([
			'product_name' => $request['product_name'],
			'description' => $request['description'],
			'price' => $request['price']
		]);

		//dd($product);

		return redirect('/products');
	}

	public function delete($id) {

		$product = Product::where('id', '=', $id);

		$product->delete();

	}

}
