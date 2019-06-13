<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function rolePermissionCreation()
    {
        //Creation of all Roles
        Role::create(['name'=>'administrator']);
        Role::create(['name'=>'user_administrator']);
        Role::create(['name'=>'user']);
        Role::create(['name'=>'guest']);

        //Creation of all Permissions
        Permission::create(['name'=>'browse']);
        Permission::create(['name'=>'read']);
        Permission::create(['name'=>'edit']);
        Permission::create(['name'=>'add']);
        Permission::create(['name'=>'delete']);
        Permission::create(['name'=>'search']);
        Permission::create(['name'=>'authenticated']);
        Permission::create(['name'=>'unauthenticated']);
        Permission::create(['name'=>'suspended']);

        // Associate Administrator role with the various permissions
        Role::findByName('administrator')->givePermissionTo(Permission::findByName('browse'));
        Role::findByName('administrator')->givePermissionTo(Permission::findByName('read'));
        Role::findByName('administrator')->givePermissionTo(Permission::findByName('edit'));
        Role::findByName('administrator')->givePermissionTo(Permission::findByName('add'));
        Role::findByName('administrator')->givePermissionTo(Permission::findByName('delete'));
        Role::findByName('administrator')->givePermissionTo(Permission::findByName('search'));

    }

    public function home()
    {
        //auth()->user()->removeRole('administrator');
        //auth()->user()->assignRole('user');
        //auth()->user()->assignRole('administrator');
        return view('welcome');
    }
}
