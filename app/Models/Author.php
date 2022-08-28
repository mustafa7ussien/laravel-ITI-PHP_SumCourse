<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Postr;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ["name", "image", "email"];

    function postr(){
        return $this->hasMany(Postr::class);
    }
}
