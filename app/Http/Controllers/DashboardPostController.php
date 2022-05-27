<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\University;
use App\Models\Transaction;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\ValidatedData;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.posts.index',[
            'posts' => Post::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.posts.create',[
            'categories' => Category::all(),
            'universities' => University::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'title' => 'required|max:255',
           'harga' => 'required',
           'slug' => 'required|unique:posts',
           'category_id' => 'required',
           'image' => 'image|file|max:10240',
           'body' => 'required'
       ]);

       if($request->file('image')){
           $validatedData['image'] = $request->file('image')->store('post-image');
       }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['university_id'] = auth()->user()->university_id;

       Post::create($validatedData);
       return redirect('/dashboard/posts')->with('success','New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('layouts.posts.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('layouts.posts.edit',[
            'post' => $post,
            'categories' => Category::all(),
            'universities' => University::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'harga' => 'required',
            'category_id' => 'required',
            'university_id' => 'required',
            'image' => 'image|file|max:10240',
            'body' => 'required'
        ];

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        
        $validatedData = $request->validate($rules);
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        $validatedData['user_id'] = auth()->user()->id;
    //    $validatedData['university_id'] = auth()->user()->id;

       Post::where('id', $post->id) -> update($validatedData);
       return redirect('/dashboard/posts')->with('success','New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success','Post has been removed!');
    }
    public function checkSlug(Request $request)
    {
        $slug= SlugService::createSlug(Post::class,'slug',$request->title);
        return response()->json(['slug' => $slug]);
    }
    
    public function table(Transaction $transaction)
    {
        return view('layouts.transaksi.index', [
            'transactions' => Transaction::where('postUser_id', auth()->user()->id)->get()
        ]);

    }
}
