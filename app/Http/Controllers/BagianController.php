<?php

namespace App\Http\Controllers;

use App\Bagian;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function index()
    {
        $bagians = Bagian::all();
        return view('backend.bagian.index', compact('bagians'));
    }

    public function create()
    {
        return view('backend.bagian.create');
    }

    public function store(Request $request){
        $bagians = Bagian::create([
            'kode_bagian'          => $request->kode_bagian,
            'nama_departement'     => $request->nama_departement,
            'lokasi'               => $request->lokasi,
            'kepala_bagian'        => $request->kepala_bagian,

        ]);

        return redirect()->back();
    }
}
