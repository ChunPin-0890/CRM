<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        // dd('HI');
        return Inertia::render('UserPost/Index');
    }
    public function create()
    {
        // dd('HI');
        return Inertia::render('UserPost/Create');
    }
}
