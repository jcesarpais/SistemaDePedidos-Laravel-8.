<?php

namespace App\Http\Controllers;


use App\Models\pratos;
use App\Models\category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        
        
        $prato = pratos::where('pratos_status', 1)->get();

        return view('FrontEnd.include.home', compact('prato'));
    }
    
    public function pratos_show($id){
        
        $categoriaPratos = pratos::where('category_id', $id)-> where('pratos_status', 1)->get();
        return view('FrontEnd.include.products', compact('categoriaPratos'));

    }

}
