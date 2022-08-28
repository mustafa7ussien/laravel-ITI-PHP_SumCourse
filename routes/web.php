<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostrController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function()
{
    return view("welcome");

});

Route::get('/hardPost', function () {

    
    $allposts = [
        ["title"=>"title1111", "body"=>"body1111", "details"=>"details1111"],
        ["title"=>"title222", "body"=>"body2222", "details"=>"details222"]
       
    
    ];
    
    return view("home", ["posts"=>$allposts]);
});

Route::get('/contactus',function()
{
    return view("contactUs");

});

Route::get('/aboutus',function()
{
    return view("aboutUs");

});

// day2

// show all posts
Route::get("/posts",[PostController::class,"index"])->name("posts.index");

//create
Route::get("/posts/create", [PostController::class, "create"])->name("posts.create");

// //show post details
Route::get("/posts/{id}",[PostController::class,"show"])->name("post.show");



// //stote post
Route::post("/posts", [PostController::class, "store"])->name("posts.store");

//delete post
Route::get("/post/delete/{id}", [PostController::class, "delete"])->name("post.delete");

//update 

//edit
Route::get("/posts/{id}/edit",[PostController::class, "edit"])->name("post.edit");

//update
 Route::put("/posts/{id}", [PostController::class, "update"])->name("post.update");

 //resources controlere and model
//for all route crud operation
Route::resource("postrs",PostrController::class);

Route::resource("authors", AuthorController::class);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
