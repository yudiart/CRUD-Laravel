<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Siswa::all();
        return view('pages/index.index',['data_siswa' => $data_siswa]);
    }
    public function create(Request $request)
    {

        \App\Siswa::create($request->all());
        return redirect('/')->with('success','Data Berhasil diinput');
    }
}
