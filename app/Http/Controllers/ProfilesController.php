<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class ProfilesController extends Controller
{
    public function show($id)
    {
        $profile = User::findOrFail($id);

        return view('profile.index', compact('profile'));

    }
    public function edit($id)
    {
        $profile = User::findOrFail($id);
        return view('profile.edit', compact('profile'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => ['required'],
            'surname' => ['required'],
            'email' => ['required', 'email']
        ]);
        $profile = User::find($id);
        
        $profile->first_name = $request->get('first_name');
        $profile->surname = $request->get('surname');
        $profile->email = $request->get('email');
        $profile->save();
        return redirect("/profiles/" . $profile->id);
    }
}
