<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\DetailPost;
use Redirect;

class DetailPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $detailposts = Post::where('id',$id)->with("detailpost")->get();
      //dd($detailpost);
      return view("detailpost.index",compact("detailposts"));
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
      $detailpost = new DetailPost();
      $detailpost->post_id = $request->post;
      $detailpost->name = $request->name;
      $detailpost->link = $request->link;
      $detailpost->save();

      return Redirect::back()->with('msg', 'The Message');
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
      $posts = Post::where('status',1)->get();
      $detailpost = DetailPost::with('post')->find($id);
      return view('detailpost.edit',compact('posts','detailpost'));
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
      DetailPost::where('id', $id)->update(['post_id' => $request->post,
                                        'name'=> $request->name,
                                        'link'=>$request->link]);
        return redirect('/posts/'.$request->post)->with('message','the message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
