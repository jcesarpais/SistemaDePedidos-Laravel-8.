<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\shipping;
use Mail;
use Session;

class CustomerController extends Controller
{
    public function show(){
        return view('FrontEnd.customer.register');
    }

    public function store(Request $request){
        $customer = new customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($request->password);
        $customer->save();
        
        $customer_id = $customer->id;
        Session::put('id', $customer_id);
        Session::put('name', $customer->name);

        /*$data = $customer->toArray();

        Mail::send('FrontEnd.mail.welcome', $data, function ($message) use($data){
            $message->to($data['email']);
            $message->subject('Seja bem vindo ao melhor lanche da cidade');
        });*/

        return redirect('/shipping');
    }

    public function shipping(){
        $customer = customer::find(Session::get('id'));
        return view('FrontEnd.checkout.shipping', compact('customer'));
    }

    public function save(Request $request){
        $shipping = new shipping();
        $shipping->name = $request->name;
        $shipping->email = $request->email;
        $shipping->phone = $request->phone;
        $shipping->address = $request->address;
        $shipping->comment = $request->comment;
        $shipping->save();

        dd('Até aqui tudo bem!');
    }
}
