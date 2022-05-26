<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\University;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.posts.jadifreelancer',[
            'users' => User::where('id',auth()->user()->id)->get(),
            'universities' => University::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.posts.jadifreelancer',[
            'users' => User::where('id',auth()->user()->id)->get(),
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
            'ktm' => 'image|file|max:10240',
        ]);
 
        if($request->file('ktm')){
            $validatedData['ktm'] = $request->file('ktm')->store('post-image');
        }
 
         $validatedData['user_id'] = auth()->user()->id;
         $validatedData['university_id'] = auth()->user()->university_id;
 
        User::create($validatedData);
        return redirect('/dashboard')->with('success','New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('layouts.posts.edit',[
            'users' => $user,
            'universities' => University::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'ktm' => 'image|file|max:10240',
            'university_id' => 'required',
            'is_admin' => 'required'
        ];
        $validatedData['ktm'] = $request->file('ktm')->store('post-image');
        $validatedData = $request->validate($rules);

        $validatedData['id'] = auth()->user()->id;
    //    $validatedData['university_id'] = auth()->user()->id;

       User::where('id', auth()->user()->id) -> update($validatedData);
       return redirect('/dashboard')->with('success','New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
