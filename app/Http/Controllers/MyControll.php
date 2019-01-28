<?php

namespace App\Http\Controllers;
use App\Http\Resources\ContactResource;
use App\post;
use Illuminate\Http\Request;
use DB;
use APP\file;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Resource_;

class MyControll extends Controller
{
    //use this middleware to prevent accessing your website without log in
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function contact(){
        return view('template.contact');
    }
    public function about(){
        return view('template.about');
    }
    public function sample(){
        return view('template.post');
    }

    public  function select()
    {
        $posts = DB::table('posts')->get();
        return view('template.index' , compact('posts'));
        //return new ContactResource($posts);

    }

    public function insert(Request $request)
    {

            $posts = new post;

            $posts->title = $request->title;
            $posts->content = $request->Content;
            $posts->writer_name = $request->writer_name;

            $image= $request->file('post_image');
            $new_name =rand(). '.' . $image->getClientOriginalExtension();
           $image->move(public_path('image'), $new_name);
           $posts->post_image = $new_name ;
           $posts->save();
            return back();

    }
    public function delete(post $id)
    {
        $id->delete();
        return back();
    }
    public function edit(post $id)
    {
        return view('template.edte' , compact('id'));
    }
    public function update(Request $request ,  $id)
    {
        // $id->update($request->all());
        //post::where('id' , $id)->update(array('title' =>$request->title , 'content' =>$request->con , 'writer_name' =>$request->writer_name,'created_at' =>$request->created_at));
        DB::table('posts')->where('id' , $id)->update(array('title' =>$request->title , 'content' =>$request->Content , 'writer_name' =>$request->writer_name , 'post_image' =>$request->post_image ));

        return redirect('index');
    }

}
