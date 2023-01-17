<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {
       $product=Product::find($id);

       //case 1 : add new product to cart
       $cart[$id]=[
           'product_name'=>$product->name,
           'product_price'=>$product->price,
           'product_quantity'=>1,
           'subtotal'=>$product->price,
           'image'=>$product->image
       ];

       session()->put('myCart',$cart);
       notify()->success('Product added to cart.');
       return redirect()->back();





       //case 2: add existing product to cart


        //case 3:cart not empty but product is new

    }


    public function viewCart()
    {
        return view('frontend.pages.cart');
    }

    public function deleteCartItem($id)
    {
       $newCart=session()->get('myCart');
        unset($newCart[$id]);
        session()->put('myCart',$newCart);

        notify()->success('Item deleted from cart.');
        return redirect()->back();
    }
}
