<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'title' => 'hello title'
        ]);
    }

    public function about()
    {
        return Inertia::render('About', [
            'title' => 'hello title'
        ]);
    }
}
