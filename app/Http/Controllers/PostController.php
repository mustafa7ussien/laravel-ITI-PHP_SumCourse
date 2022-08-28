<?php

namespace App\Http\Controllers;
use App\Models\Author;


use Illuminate\Http\Request;
//use model
use App\Models\Post;

class PostController extends Controller
{
    function index()
    {
       $posts= Post::all();
    //    var_dump($posts);
       return view("posts.index" ,["posts" => $posts]);
    //    return view("products.index", ["products"=>$products]);
    }

    function show($id)
    {
        $post = Post::findOrFail($id);
        return view("posts.show", ["post"=>$post]);

    }

    function  create(){
        return view("posts.create");
    }

    function store(){
                $title = request("title");
                $body = request("body");
                $detail = request("detail");
                $image = request("image");
        
                $newpost = new Post();
                $newpost->title = $title;
                $newpost->body = $body;
                $newpost->detail = $detail;
                $newpost->image = $image;
                $newpost->save();
        
                return to_route("posts.index");
            }

    function delete($id){
                $post=Post::findOrfail($id);
                $post->delete();
                    
              
                return to_route("posts.index");
            }

            function edit($id)
            {
                $post=Post::findOrfail($id);
                return view("posts.edit", ["post"=>$post]);

            }

            function update($id)
            {
                $post = Post::findOrFail($id);
                $title = request("title");
                $body = request("body");
                $detail = request("detail");
                $image = request("image");
        
                $post->title=  $title;
                $post->body = $body;
                $post->detail = $detail;
                $post->image = $image;
                $post->save();
        
               
                return to_route("post.show", $post->id);
            }

}
