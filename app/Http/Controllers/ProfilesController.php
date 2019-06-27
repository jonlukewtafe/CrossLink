<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class ProfilesController extends Controller
{
    public function show($id)
    {
        $profile = Profile::findOrFail($id);

        return view('profile.index', compact('profile'));

    }
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));

    }
}
