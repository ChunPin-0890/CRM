<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        // dd('HI');
        return Inertia::render('Products/Index');
    }
    public function create()
    {
        // dd('HI');
        return Inertia::render('Products/Create');
    }
}
