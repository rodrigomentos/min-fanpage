<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Post;
use App\DetailPost;
use Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $types = Type::get();
      $posts = Post::select('id','name')->where('status',1)->get();
      $type = new Type();
      $post = new Post();
      $detailpost = new DetailPost();
      return view("home",compact("types","type","post","detailpost","posts"));
    }


    public function music()
    {
      return view('music.index');
    }

    public function video()
    {
      $videos = Post::where('type_id',3)->where('status',1)->get();
      return view('video.index',compact('videos'));
    }

    public function photo()
    {
      return view('photo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("home");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $post = new Post();
      $post->type_id = $request->type;
      $post->name = $request->name;
      $post->directory = $request->directory;
      $post->link = $request->link;
      $post->save();

      return Redirect::back()->with('msg', 'The Message');
    }

    public function list()
    {
      $posts = Post::with("type")->where('status',1)->get();
      return view("post.index",compact("posts"));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::with('type')->find($id);
      $types = Type::get();
      return view('post.edit',compact('post','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Post::where('id', $id)  ->update(['type_id' => $request->type,
                                        'name'=> $request->name,
                                        'directory'=>$request->directory,
                                        'link'=>$request->link]);
        return redirect('/posts')->with('message','the message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Post::where('id', $id)->update(['status' => 0]);
        return redirect('/posts')->with('message','the message');
    }
}
