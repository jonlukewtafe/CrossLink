<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        //Role::create(['name'=>'admin']);
        //Permission::create(['name'=>'modify_user']);
        //auth()->user()->givePermissionTo('modify_user');
        //auth()->user()->assignRole('admin');
        return view('home');
    }

    public function home()
    {
        return view('welcome');
    }
}
