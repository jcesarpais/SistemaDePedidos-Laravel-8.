<?php

namespace App\Http\Controllers;

use App\Models\cupons;
use Illuminate\Http\Request;

class cuponsController extends Controller
{
    public function index(){
        return view('admin.cupons.addCupons');
    }

    public function save(Request $request){
        $cupon = new cupons();
        $cupon->cupon_code_name = $request->cupon_code_name;
        $cupon->cupon_type = $request->cupon_type;
        $cupon->cupon_value = $request->cupon_value;
        $cupon->cart_min_value = $request->cart_min_value;
        $cupon->expired_on = $request->expired_on;
        $cupon->cupon_status = $request->cupon_status;
        $cupon->added_on = $request->added_on;
        $cupon->save();

        return back()->with('sms','Cupon Adicionado Com Sucesso!');
    }

   public function manage(){
        $cupon = cupons::all();
        return view('admin.cupons.manageCupons', compact('cupon'));
    }

    public function active($cupon_id){
        $cupon = cupons::find($cupon_id);
        $cupon->cupon_status = 1;
        $cupon->save();
        return back();
    }

    public function inactive($cupon_id){
        $cupon = cupons::find($cupon_id);
        $cupon->cupon_status = 0;
        $cupon->save();
        return back();
    }

    public function delete($cupon_id){
        $cupon = cupons::find($cupon_id);
        $cupon->delete();
        return back()->with('sms','Cupon excluido com sucesso!');

    }

    public function update (Request $request){
        $cupon = cupons::find($request->cupon_id);
        $cupon->cupon_code_name = $request->cupon_code_name;
        $cupon->cupon_type = $request->cupon_type;
        $cupon->cupon_value = $request->cupon_value;
        $cupon->cart_min_value = $request->cart_min_value;
        
            
        $cupon->save();
        return redirect('/cupons/manage')->with('sms','Dados do Cupon Atualizado com Sucesso!');
    }
}
