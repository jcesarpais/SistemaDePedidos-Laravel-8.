<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\pratos;

class CartController extends Controller
{
    public function insert (Request $request){
        $prato = pratos::where('pratos_id', $request->pratos_id)->first();

        Cart::add([
                'id' => $request->pratos_id,
                'qty' => $request->qty,
                'name' => $prato->pratos_name,
                'price' => $prato->pratos_price,
                'weight' => 550,
                'options' => [
                    'image' => $prato->pratos_image,
                ],

            ]);
        

        return redirect()->route('cart_show');
    }

    public function show(){
        $CartPrato = Cart::content();
        
        return view('FrontEnd.cart.show', compact('CartPrato'));
    }

    public function update(Request $request){
        Cart::update($request->rowId, $request->qty);
        return back();
    }

    public function remove($rowId){
        Cart::remove($rowId);
        return back();
    }

    
}
