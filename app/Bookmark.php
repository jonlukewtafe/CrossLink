<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $guarded = ['bookmark_id', 'created_at', 'updated_at'];

    public function user(){
       return $this->belongsToMany(User::class, 'user_bookmark');
    }
}
