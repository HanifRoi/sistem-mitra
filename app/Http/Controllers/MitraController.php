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
}
