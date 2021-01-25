<?php

namespace App\Http\Controllers;

use App\Penerimaan;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index()
    {
        $penerimaans = Penerimaan::all();
        return view('backend.penerimaan.index', compact('penerimaans'));
    }
    public function create()
    {
        return view('backend.penerimaan.create');
    }

    public function store(Request $request){
        $penerimaans = Penerimaan::create([
            'no_penerimaan'  => $request->no_penerimaan,
            'no_test'        => $request->no_test,
            'nama'           => $request->nama,
            'nilai'          => $request->nilai,
            'status'         => $request->status,


        ]);

        return redirect()->back();
    }
}
