<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;

class ProfilesController extends Controller
{
    public function show($id)
    {
        $profile = User::findOrFail($id);
        $users = User::all();


        return view('profile.index', compact('profile', 'users'));

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
            'email' => ['required', 'email'],
            'password' => []
        ]);
        $profile = User::find($id);

        $profile->first_name = $request->get('first_name');
        $profile->surname = $request->get('surname');
        $profile->email = $request->get('email');
        $profile->password = bcrypt($request->get('password'));
        $profile->save();

        if($profile->email != 'userAdmin@localhost.com' && $profile->id)
            $profile = User::find(2);
        return redirect("/profiles/" . $profile->id);
    }
}
