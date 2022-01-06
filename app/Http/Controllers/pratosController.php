<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\pratos;
use DB;
use Illuminate\Http\Request;

class pratosController extends Controller
{
    public function index(){
        $categorias = category::where('category_status', 1)->get();
        return view('admin.pratos.addPratos', compact('categorias'));
    }

    public function save(Request $request){

        $imgName = $request->file('pratos_image');
        $image = $imgName->getClientOriginalName();
        $directory = 'AdminSourceFile/images/';
        $imgUrl = $directory.$image;
        $imgName->move($directory,$image);

        $prato = new pratos();
        $prato->pratos_name = $request->pratos_name;
        $prato->category_id = $request->category_id;
        $prato->pratos_detail = $request->pratos_detail;
        $prato->pratos_image = $imgUrl;
        $prato->pratos_status = $request->pratos_status;
        $prato->pratos_price = $request->pratos_price;
        $prato->save();

        return back()->with('sms','Prato Adicionado Com Sucesso!');
    }

   public function manage(){
        
        $categorias = category::where('category_status', 1)->get();

        $pratos = DB::table('pratos')->join('categories','pratos.category_id', '=', 'categories.category_id')->select('pratos.*','categories.category_name')->get();
        return view('admin.pratos.managePratos', compact('pratos', 'categorias'));
    }

    public function active($pratos_id){
        $prato = pratos::find($pratos_id);
        $prato->pratos_status = 1;
        $prato->save();
        return back();
    }

    public function inactive($pratos_id){
        $prato = pratos::find($pratos_id);
        $prato->pratos_status = 0;
        $prato->save();
        return back();
    }

    public function delete($pratos_id){
        $prato = pratos::find($pratos_id);
        $prato->delete();
        return back()->with('sms','Prato excluido com sucesso!');

    }

    public function update (Request $request){
        $prato = pratos::find($request->pratos_id);
        $imgName = $request->file('pratos_image');


        if ($imgName){
            
            $image = $imgName->getClientOriginalName();
            $directory = 'AdminSourceFile/images/';
            $imgUrl = $directory.$image;
            $imgName->move($directory,$image);
            
            $old_img = $prato->pratos_image;
            
            if (file_exists($old_img)){
                unlink($old_img);
            }

            $prato->pratos_name = $request->pratos_name;
            $prato->category_id = $request->category_id;
            $prato->pratos_detail = $request->pratos_detail;
            $prato->pratos_image = $imgUrl;
            $prato->pratos_price = $request->pratos_price;
        }

        else{

            $prato->pratos_name = $request->pratos_name;
            $prato->category_id = $request->category_id;
            $prato->pratos_detail = $request->pratos_detail;
            $prato->pratos_price = $request->pratos_price;
            
        }   
            
        $prato->save();
        return back()->with('sms','Dados do Prato Atualizado com Sucesso!');
    }
}
