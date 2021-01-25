<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('backend.pengguna.index', compact('penggunas'));
    }
    
    public function create()
    {
        return view('backend.pengguna.create');
    }

    public function store(Request $request){
        $penggunas = Pengguna::create([
            'kode_pegawai'  => $request->kode_pegawai,
            'nama'          => $request->nama,
            'telp'          => $request->telp,
            'username'      => $request->username,
            'bagian'        => $request->bagian,
            'alamat'        => $request->alamat,
            'jp'            => $request->jp,

        ]);

        return redirect()->back();
    }
}
