<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index(Request $request)
    {
        
        $cari = $request->input('cari');

        $data_mitra = Mitra::when($cari, function ($query) use ($cari) {
                return $query->where('nama_mitra', 'like', '%'. $cari . '%')
                             ->orWhere('kategori_usaha', 'like', '%'. $cari . '%')
                             ->orWhere('alamat', 'like', '%'. $cari . '%')
                             ->orWhere('no_telp', 'like', '%'. $cari . '%');
            })->get();

            return view('mitra.index', compact('data_mitra', 'cari'));
    }

    public function create()
    {
        return view('mitra.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $mitra = new Mitra();

        $request->validate([
            'nama_mitra' => 'required|string|max:255|min:3',
            'kategori_usaha' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|numeric|max:15',
        ],
        [
            'nama_mitra.required' => 'Nama Mitra harus diisi.',
            'kategori_usaha.required' => 'Kategori Usaha harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'no_telp.required' => 'Nomor Telepon harus diisi.',
        ]);

        $mitra->nama_mitra = $request->nama_mitra;
        $mitra->kategori_usaha= $request->kategori_usaha;
        $mitra->alamat = $request->alamat;
        $mitra->no_telp = $request->no_telp;

        $mitra->save();

        return redirect('/mitra')->with('sukses', 'Data Mitra berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $mitra = Mitra::findOrFail($id);
        return view('mitra.edit', compact('mitra'));
    }

    public function update(Request $request, $id)
    {
       $mitra = Mitra::findOrFail($id);

       $request->validate([
           'nama_mitra' => 'required|string|max:255',
           'kategori_usaha' => 'required|string|max:255',
           'alamat' => 'required|string|max:255',
           'no_telp' => 'required|string|max:15',
       ],[
           'nama_mitra.required' => 'Nama Mitra harus diisi.',
           'kategori_usaha.required' => 'Kategori Usaha harus diisi.',
           'alamat.required' => 'Alamat harus diisi.',
           'no_telp.required' => 'Nomor Telepon harus diisi.',
       ]);  

       $mitra->nama_mitra =$request->nama_mitra;
       $mitra->kategori_usaha =$request->kategori_usaha;
       $mitra->alamat =$request->alamat;
       $mitra->no_telp =$request->no_telp;

       $mitra->save();

       return redirect('/mitra')->with('sukses', 'Data Mitra berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mitra = Mitra::findOrFail($id);
        $mitra->delete();

        return redirect('/mitra')->with('sukses', 'Data Mitra berhasil dihapus.');
    }
}