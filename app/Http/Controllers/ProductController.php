<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

	public function create(Request $request) {

		$validator = Validator::make($request->all(), [
			'product_id' => ['required', 'string', 'max:255'],
			'product_name' => ['required', 'string', 'max:255'],
			'description' => ['required', 'string', 'max:255'],
			'price' => ['required', 'string']
		]);

		return Product::create([
			'product_id' => $productdata['product_id'],
			'product_name' => $productdata['product_name'],
			'description' => $productdata['description'],	
			'price' => $productdata['price']
		]);
	}

	public function show() {
		//return redirect('/product')
	}

	public function delete() {

	}

	public function update() {

	}

	public function productindex() {

	}
}
