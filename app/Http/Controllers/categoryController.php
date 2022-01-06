<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        return view('admin.category.addCategory');
    }

    public function save(Request $request){
        $category = new category();
        $category->category_name = $request->category_name;
        $category->order_number = $request->order_number;
        $category->category_status = $request->category_status;
        $category->added_on = $request->added_on;
        $category->save();

        return back()->with('sms','Categoria Adicionada Com Sucesso!');
    }

    public function manage(){
        $categorias = category::all();
        return view('admin.category.manageCategory',compact('categorias'));
    }

    public function active($category_id){
        $categorias = category::find($category_id);
        $categorias->category_status = 1;
        $categorias->save();
        return back();
    }

    public function inactive($category_id){
        $categorias = category::find($category_id);
        $categorias->category_status = 0;
        $categorias->save();
        return back();
    }

    public function delete($category_id){
        $categorias = category::find($category_id);
        $categorias->delete();
        return back();

    }

    public function update (Request $request){
        $category = category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->order_number = $request->order_number;
        $category->save();
        return redirect('/category/manage')->with('sms','Categoria Atualizada com Sucesso!');
    }
}
