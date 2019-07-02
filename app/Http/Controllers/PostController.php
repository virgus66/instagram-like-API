<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'emptyField' => '', // send field but don't set any rules
            'caption'    => 'required',
            'image'      => ['required','image'],
        ]);

        $imagePath = request('image')->store('/image_uplads', 'public');
        $image = Image::make( public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image'   => $imagePath,
        ]);
        // \App\Post::create($data); // await arr of properties 

        return redirect('/profile/'. auth()->user()->id );

        // dd( request()->all() );
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
