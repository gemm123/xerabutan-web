<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\University;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('layouts.posts.jadifreelancer',[
            'categories' => Category::all(),
            'universities' => University::all()
        ]);
    }
}
