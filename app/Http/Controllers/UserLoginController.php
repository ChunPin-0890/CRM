<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class UserLoginController extends Controller
{
    public function index()
    {
        // dd('HI');
        return Inertia::render('Userlogin/Index');
    }
}
