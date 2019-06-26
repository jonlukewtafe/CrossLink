<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = array();

    public function bookmarks(){
        return $this->belongsToMany('App\Bookmark', 'tag_bookmark');
    }
}
