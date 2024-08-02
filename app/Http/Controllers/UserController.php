<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return Inertia::render('Users/Index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        $users = User::all();
        $roles = Role::all();

        return Inertia::render('Users/Create',[
            'users' => $users,
            'roles' => $roles
        ]);
    }

    
}
