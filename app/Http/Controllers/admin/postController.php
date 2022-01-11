<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function index(){
        $post = Post::with('category','user')->get();
        return $post;
    }
    public function indexCategory(){
        $category = Category::get();
        return $category ;
    }
}
