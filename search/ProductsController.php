<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Cart;
use Auth;

class ProductsController extends Controller
{
    public function directory() {
    	$products = Product::paginate();

    	return view("products", compact("products"));
    }

    public function show($id) {
    	$product = Product::find($id);

    	return view("product", compact("product"));
    }

    public function addToCart($id) {
    	$cart = new Cart();

    	$product = Product::find($id);

    	$cart->add($product);

    	return redirect("/products");
    }

    public function checkout() {
        $cart = new Cart();

        if (!$cart->list()) {
            return redirect("/products");
        }

        return view("checkout");
    }

    public function finishCheckout() {
        $cart = new Cart();

        $products = $cart->list();

        foreach ($products as $product) {
            $product->stock = $product->stock - 1;
            $product->save();

            $product->customers()->attach(Auth::id());
        }

        $cart->clear();

        return view("success");
    }

    public function search(Request $req) {
        $search = $req["search"];

        $products = Product::where("name", "like", "%$search%")->get();

        return view("search", compact("products"));
    }
}
