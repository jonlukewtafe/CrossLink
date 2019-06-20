<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    public function user(){
       return $this->belongsToMany(User::class, 'user_bookmark');
    }
}
