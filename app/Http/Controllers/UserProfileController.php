<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class UserProfileController extends Controller
{
    public function index()
    {
        // dd('HI');
        return Inertia::render('UserProfile/Index');
    }
}
