<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insertdata;
class postController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts=insertdata::orderBy('Title', 'asc')->paginate(1);

       return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url="/posts/store";
        return view('posts.create', compact('url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
         $this->validate($request, [
              'Name'=> 'required',
              'Occupation' => 'required'         
          ]);

          //  insertdata::create($data)->save();         
          $post= new insertdata;
          $post->Title = $request->input('Name');
          $post->Body= $request->input('Occupation');
          
          $post->user_id= auth()->user()->id;
          $post->save();
         
        /* TO STORE IN SINGLE LINE  
          $post=inserdata::create($data);
          $post->save();*/
          //Session::flash('flash_message', 'Task successfully added!');
          return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res= insertdata::find($id);
        return view('posts.show')->with('res', $res);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $url="/posts/update/".$id;
         $edit= insertdata::find($id);
         if(auth()->user()->id !==$edit->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
         }
           return view('posts.edit', compact('edit', 'url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
          extract($_POST);
          //
          //dd($_POST);
          $row= insertdata::find($id);
          $row->update($data);
         
         // $update->save();
          //Session::flash('flash_message', 'Task successfully added!');
          return redirect('/posts')->with('success', 'Post Updated');
         

    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=insertdata::find($id);
        if(auth()->user()->id !==$delete->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
         }
        $delete->delete();
        return redirect('/posts')->with('success', 'Post Deleted');
    }
}
