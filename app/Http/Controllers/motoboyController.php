<?php

namespace App\Http\Controllers;

use App\Models\motoboy;
use Illuminate\Http\Request;

class motoboyController extends Controller
{
    public function index(){
        return view('admin.delivery.motoboy.addMotoboy');
    }

    public function save(Request $request){
        $entregas = new motoboy();
        $entregas->motoboy_name = $request->motoboy_name;
        $entregas->motoboy_phone_number = $request->motoboy_phone_number;
        $entregas->motoboy_password = $request->motoboy_password;
        $entregas->motoboy_status = $request->motoboy_status;
        $entregas->added_on = $request->added_on;
        $entregas->save();

        return back()->with('sms','Motoboy Adicionado Com Sucesso!');
    }

   public function manage(){
        $entregas = motoboy::all();
        return view('admin.delivery.motoboy.manageMotoboy', compact('entregas'));
    }

    public function active($motoboy_id){
        $entregas = motoboy::find($motoboy_id);
        $entregas->motoboy_status = 1;
        $entregas->save();
        return back();
    }

    public function inactive($motoboy_id){
        $entregas = motoboy::find($motoboy_id);
        $entregas->motoboy_status = 0;
        $entregas->save();
        return back();
    }

    public function delete($motoboy_id){
        $entregas = motoboy::find($motoboy_id);
        $entregas->delete();
        return back()->with('sms','Motoboy excluido com sucesso!');

    }

    public function update (Request $request){
        $entregas = motoboy::find($request->motoboy_id);
        $entregas->motoboy_name = $request->motoboy_name;
        $entregas->motoboy_phone_number = $request->motoboy_phone_number;
            
        $entregas->save();
        return redirect('/delivery/motoboy/manage')->with('sms','Dados do Motoboy Atualizado com Sucesso!');
    }
}
