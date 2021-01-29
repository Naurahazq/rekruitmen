<?php

namespace App\Http\Controllers;

use App\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index()
    {
        $pelamars = Pelamar::all();
        return view('backend.pelamar.index', compact('pelamars'));
    }

    public function create()
    {
        return view('backend.pelamar.create');
    }

    public function edit($id)
    {
        $pelamars = Pelamar::findOrFail($id);
        return view('backend.pelamar.edit', compact('pelamars'));
    }

    public function store(Request $request){
        $pelamars = Pelamar::create([
            'no_test'               => $request->no_test,
            'nama'                  => $request->nama,
            'alamat'                => $request->alamat,
            'pendidikan_terakhir'   => $request->pendidikan_terakhir,
            'telp'                  => $request->telp,
            'jp'                    => $request->jp,
            'agama'                 => $request->agama,

        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $pelamars = Pelamar::find($id);

        $pelamars->update($request-> all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        $pelamars = Pelamar::find($id);

        $pelamars -> delete($pelamars->all());

        return redirect()->back();
    }

    public function show($id)
    {
        $pelamars = Pelamar::find($id);
        return view('backend.pelamar.show', compact('pelamars'));
    }
}
