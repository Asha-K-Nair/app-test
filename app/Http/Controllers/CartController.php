<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request){

        Cart::create([
            'product_id'=>$request->productId,
            'user_id'=>Auth::user()->id
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Added to Cart successfully.');        
    }

    public function viewCart(){ 
        $id = Auth::user()->id;
        $cartProducts = Cart::with('products')->where('user_id',$id)->get() ;
       // dd($cartProducts);
        foreach ($cartProducts as $item) {
            dd($item->products);
        }
        return view('cart.index', compact('data'));
    }
}
