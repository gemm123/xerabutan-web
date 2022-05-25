<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\University;
class PostController extends Controller
{
    public function index(){
        $title='';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category')); 
            $title = ' in '.$category->name;
        }
        if(request('user')){
            $user = User::firstWhere('name',request('user')); 
            $title = ' by '.$user->name;
        }
        if(request('university')){
            $university = University::firstWhere('slug',request('university')); 
            $title = ' from '.$university->name;
        }
        return view('posts',[
            "title" => "Posts".$title ,
            "active" => "posts",
            "posts" => Post::latest()-> filter(request(['search','category','user','university'])) 
            ->paginate(6)
            ->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Posts",
            "post" => $post
        ]);
    }
}