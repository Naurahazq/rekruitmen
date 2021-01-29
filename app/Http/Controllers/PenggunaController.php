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

    public function edit($id)
    {
        $penggunas = Pengguna::findOrFail($id);
        return view('backend.pengguna.edit', compact('penggunas'));
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

    public function update(Request $request, $id)
    {
        $penggunas = Pengguna::find($id);

        $penggunas->update($request-> all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        $penggunas = Pengguna::find($id);

        $penggunas -> delete($penggunas->all());

        return redirect()->back();
    }

    public function show($id)
    {
        $penggunas = Pengguna::find($id);
        return view('backend.pengguna.show', compact('penggunas'));
    }
}
