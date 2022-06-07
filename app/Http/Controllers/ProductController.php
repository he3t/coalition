<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function index()
  {
    $data = Product::all();
    return view('/product', ['data' => $data]);
  }

  public function addProduct(Request $request)
  {
    $product = new Product();
    $product->product_name = $request->productname;
    $product->quantity_in_stock = $request->quantity;
    $product->price_per_item = $request->price;
    $product->save();
    return view('/dashboard');
  }
}
