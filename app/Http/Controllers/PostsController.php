<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $posts=Posts::all();
         return view('posts/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          
    
        
        
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        //$post1= new Posts();
       /* 
        
        $method = $request->method();

        if ($request->isMethod('post')) {
   
     
    } */
     // return $request->all();
        
        $title = request('title');
        $content = request('content');
        $category_id=1;
    
      Posts::create(['content'=>$content,'title'=>$title,'category_id'=>$category_id]);
        return $request->url();
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts,$id)
    {

        $posts=Posts::where('id',$id)->first();
       
       return view('posts/show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts,$id)
    {
        $posts=Posts::where('id',$id)->first();
        return view('posts/edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts,$id)
    {
        
         $posts=Posts::where('id',$id)->update(['title'=>$request->title,
                                                'content'=>$request->content,
                                               'category_id'=>1
                                               ]);
        return 'update single data';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts,$id)
    {
            Posts::destroy($id);
        
        return 'delete data';
    }
}
