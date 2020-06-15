<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Siswa::all();
        $laki = $data_siswa->where('jenis_kelamin','=','L');
        $perempuan = $data_siswa->where('jenis_kelamin','=','P');

        return view('pages/index.index',[
            'data_siswa' => $data_siswa,
            'laki'=> $laki,
            'perempuan'=> $perempuan
        ]);
    }
    public function create(Request $request)
    {

        \App\Siswa::create($request->all());
        return redirect('/')->with('success','Data Berhasil diinput');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('pages/siswa.edit',['siswa'=>$siswa]);
    }
    public function update(Request $request,$id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/')->with('success','Data Berhasil di update');


    }
    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/')->with('delete','Data is deleted');


    }
}
