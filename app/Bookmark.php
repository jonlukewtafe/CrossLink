<?php

namespace App;

use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use Taggable;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    //protected $guarded = array();

    /*public function user(){
       return $this->belongsToMany(User::class, 'users');
    }*/
}
