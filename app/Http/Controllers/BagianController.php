<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function index()
    {
        return view('backend.bagian.index');
    }

    public function create()
    {
        return view('backend.bagian.create');
    }
}
