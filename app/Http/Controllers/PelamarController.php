<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index()
    {
        return view('backend.pelamar.index');
    }

    public function create()
    {
        return view('backend.pelamar.create');
    }
}
