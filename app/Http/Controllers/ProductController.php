<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

		return view('Product.create');

	}

	public function update(Request $request) {

		$validator = Validator::make($request->all(), [
			'product_id' => ['required', 'string', 'max:255'],
			'product_name' => ['required', 'string', 'max:255'],
			'description' => ['required', 'string', 'max:255'],
			'price' => ['required', 'string']
		]);

		return Product::create([
			'product_id' => $request['product_id'],
			'product_name' => $request['product_name'],
			'description' => $request['description'],	
			'price' => $request['price']
		]);

	}

	public function show($id) {

		$product = Product::where('id', '=', $id)->get(); 
		return view('Product.show', compact('product'));

	}

	public function edit($id) {
		$product = Product::find($id);
		return view('Product.edit', compact('product'));
	}

	public function delete(Product $product, $id) {
		$product = Product::where('id', '=', 'Product::find($id)');	

		$product->delete();
	}

}
