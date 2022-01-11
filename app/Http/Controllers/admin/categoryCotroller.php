<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryCotroller extends Controller
{
    //

    public function store( Request $request){
        $this->validate($request, [
            'cat_name' => 'required',

        ]);

        $category  =new Category();

        $category->cat_name = $request->cat_name;
        $category->save();
        return $category;

    }

    public function index(){
        $category = Category::get();
        return response()->json([
            "category" => $category,
        ],status:200);

    }
    public function delete($id){

        $category = Category::where('id',$id)->first();
        $category->delete();
        return $category;

    }

    public function edit($id){

        $category = Category::where('id',$id)->first();
        return response()->json([
            'category'=>$category,
        ]);

    }
    public function update(Request $request, $id){
        $category = Category::where('id',$id)->first();
        $category->cat_name = $request->cat_name;
        $category->save();
        return $category;

    }
}
