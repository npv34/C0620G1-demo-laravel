<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index() {
        $cart = Session::get('cart');
        return view('front-end.cart.index', compact('cart'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::get('cart');
        $newCart = new Cart($oldCart);
        $newCart->add($product);
        Session::put('cart', $newCart);

        return back();
    }
}
