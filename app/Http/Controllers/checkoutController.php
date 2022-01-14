<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\shipping;
use App\Models\order;
use App\Models\payment;
use App\Models\orderDetail;
use Illuminate\Http\Request;
use Cart;


use Session;

class checkoutController extends Controller
{
    public function payment(){
        return view('FrontEnd.checkout.payment');
    }

    public function order(Request $request){
        
        $paymentType = $request->payment_type;
        
        if($paymentType == 'dinheiro'){
            $order = new order();
            

            $order->customer_id = Session::get('id');
            $order->shipping_id = Session::get('id');
            $order->order_total = Session::get('sum');
            $order->save();

            $payment = new payment();
            $payment->order_id = $order->order_id;
            $payment->payment_type = $paymentType;
            $payment->save();

            $CartPrato = Cart::content();
            
            foreach($CartPrato as $cart){
                $orderDetail = new orderDetail();
                $orderDetail->order_id = $order->order_id;
                $orderDetail->pratos_id = $cart->id;
                $orderDetail->pratos_name = $cart->name;
                $orderDetail->pratos_price = $cart->price;
                $orderDetail->pratos_qty = $cart->qty;
                $orderDetail->save();
            }

            Cart::destroy();

            dd('Até aqui tudo certo');
            

            

        }elseif($paymentType == 'debito'){

        }
        return $request;
    }
}
