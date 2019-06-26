<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    //protected $guarded = ['bookmark_id', 'created_at', 'updated_at'];
    protected $guarded = array();

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    /*public function user(){
       return $this->belongsToMany(User::class, 'users');
    }*/
}
