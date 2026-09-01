<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index()
    {
        $data_mitra = Mitra::all();
        return view('mitra.index', compact('data_mitra'));
    }

    public function create()
    {
        return view('mitra.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $mitra = new Mitra();

        $mitra->nama_mitra = $request->nama_mitra;
        $mitra->kategori_usaha= $request->kategori_usaha;
        $mitra->alamat = $request->alamat;
        $mitra->no_telp = $request->no_telp;

        $mitra->save();

        return redirect('/mitra');
    }

    public function edit($id)
    {
        $mitra = Mitra::findOrFail($id);
        return view('mitra.edit', compact('mitra'));
    }

    public function update(Request $request, $id)
    {
       $mitra = Mitra::findOrFail($id);

       $mitra->nama_mitra =$request->nama_mitra;
       $mitra->kategori_usaha =$request->kategori_usaha;
       $mitra->alamat =$request->alamat;
       $mitra->no_telp =$request->no_telp;

       $mitra->save();

       return redirect('/mitra');
    }

    public function destroy($id)
    {
        $mitra = Mitra::findOrFail($id);
        $mitra->delete();

        return redirect('/mitra');
    }
}