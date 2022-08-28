<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ["title","body","detail","image","author_id"];


    function author(){
        return $this->belongsTo(Author::class);  
    }

    function authors(){
        return $this->belongsTo(Author::class);
    }


    function get_show_url(){
        return route("books.show", $this->id);
    }
    function get_edit_url(){
        return route("books.edit", $this->id);
    }
    function get_update_url(){
        return route("books.update", $this->id);
    }
    function get_delete_url(){
        return route("books.delete", $this->id);
    }
}
