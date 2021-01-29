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

    public function edit($id)
    {
        $penerimaans = Penerimaan::findOrFail($id);
        return view('backend.penerimaan.edit', compact('penerimaans'));
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

    public function update(Request $request, $id)
    {
        $penerimaans = Penerimaan::find($id);

        $penerimaans->update($request-> all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        $penerimaans = Penerimaan::find($id);

        $penerimaans -> delete($penerimaans->all());

        return redirect()->back();
    }

    public function show($id)
    {
        $penerimaans = Penerimaan::find($id);
        return view('backend.penerimaan.show', compact('penerimaans'));
    }
}
