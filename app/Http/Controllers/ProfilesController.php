<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($id)
    {
        //$profiles = Profile::all();
        $profile = Profile::findOrFail($id);
        $image = public_path('images\bookmarks' .  $profile>photo);

        return view('profile.index', compact('profile', 'image'));

    }
}
