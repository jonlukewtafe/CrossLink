<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function profile() {
        $this->belongsTo('App\User');
        //$this->belongsToMany(Role::class, 'role_user');
    }
}
