<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PHPUnit\Framework\Constraint\FileExists;
use RealRashid\SweetAlert\Facades\Alert;


class PostrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view("postsr.index", ["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("postsr.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputdata= $request->all();

        $request->validate([
            "title"=>"required"
        ]);

        $image = $request->file("image");
        // dump($image);
        if($image){

            $imagename=implode(".",
                [date('YmdHis'),$inputdata["title"], $image->getClientOriginalExtension()]);
            $dstentaiton_path ="postimages/";
            $image->move($dstentaiton_path, $imagename);
            $inputdata["image"] = $imagename;
        }

         $postsucess=Post::create($inputdata);
         if($postsucess)
         {
            alert()->success('Post Create',' Successfully');
            return to_route("postrs.index");
         }
        

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $postr)
    {
        // Alert::alert('Title', 'Message', 'Type');
        // dump(request());
        return  view("postsr.show", ["postr"=>$postr]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $postr)
    {
        return view("postsr.edit", ["postr"=>$postr]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $postr)
    {

        $request->validate([
            "title"=>"required"
        ]); 

        $inputdata= $request->all();

        if($request->file("image")){
            $this->deleteImage($postr);
            $new_image= $request->file("image"); 
       
            $imagename=implode(".",[date('YmdHis'),$inputdata["title"], $new_image->getClientOriginalExtension()]);
            $dstentaiton_path ="postimages/";
            $new_image->move($dstentaiton_path, $imagename);
            $inputdata["image"] = $imagename;
        }


        $postr->update($inputdata);
        return  to_route("postrs.show", $postr->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $postr)
    {
        // dump($postr);
        
        if(File::exists(public_path("postimages/$postr->image"))){
            File::delete(public_path("postimages/$postr->image"));
        }
        
        $postr->delete();
        return to_route("postrs.index");
    }


    private function  deleteImage(Post $postd){
        if(File::exists(public_path("postimages/$postd->image"))){
            File::delete(public_path("postimages/$postd->image"));
        }
    }
}
