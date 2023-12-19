<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    private $columns =['posttitle','description','author','published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        // select * from "posts" where "posts"."deleted_at" is null
        return view('posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $posts = new Post();
        // $posts->posttitle= $request->posttitle;
        // $posts->description =$request->description;
        // $posts->author= $request->author;
        // if(isset($request->published)){
        //     $posts->published=1;
        // }else{
        //     $posts->published=0;
        // }
       
        // $posts-> save();
        // return 'Data added successefully';

        $data= $request->only($this->columns);
        $data['published']=isset($request->published);
        Post:: create($data);
        return redirect('Posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('showPost',compact('posts'));   //post hna esm al variable f line 57
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post ::findOrFail($id);
        return view('updatePost',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data= $request->only($this->columns);
        $data['published']=isset($request->published);
        Post ::where('id',$id)->update($data);
        return redirect('Posts'); // dah esm al route bta3 al index
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::get();
        return redirect('Posts');
    }


    // trashed list
    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view ('trashedposts',compact('posts'));
    }

    //forcedelete
    public function forceDelete(string $id)
    {
        $posts = Post::get();
        return redirect('Posts');
    }

    //restore
    public function restore(string $id)
    {
        $posts = Post::get();
        return redirect('Posts');
    }
}
