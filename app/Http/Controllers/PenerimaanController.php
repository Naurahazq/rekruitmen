<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index()
    {
        return view('backend.penerimaan.index');
    }
    public function create()
    {
        return view('backend.penerimaan.create');
    }
}
