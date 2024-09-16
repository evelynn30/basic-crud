<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'nim' => 'required|numeric|max_digits:10',
            'agama' => 'required',
            'alamat'=> 'required',
            'jk' => 'required',
            'hobi' => 'required',
            'no_hp' => 'required|numeric|max_digits:12',
            'syarat'=> 'required',

        ]);

        //dd($request);
        $mahasiswa = Mahasiswa::create($input);
        
    
        return redirect()->route('mahasiswa.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
{
    // dd($mahasiswa);
    $input = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'nim' => 'required|numeric|max_digits:10',
            'agama' => 'required',
            'alamat'=> 'required',
            'jk' => 'required',
            'hobi' => 'required',
            'no_hp' => 'required|numeric|max_digits:12',
            'syarat'=> 'required',
    ]);

    $mahasiswa->update($input);

    
    // $mahasiswa = Mahasiswa::find($id);
    // $mahasiswa->nama_depan = $request->input('nama_depan');
    // $mahasiswa->nama_belakang = $request->input('nama_belakang');
    // $mahasiswa->nim = $request->input('nim');
    // $mahasiswa->agama = $request->input('agama');
    // $mahasiswa->alamat = $request->input('alamat');
    // $mahasiswa->jk = $request->input('jk');
    // $mahasiswa->hobi = $request->input('hobi');
    // $mahasiswa->no_hp = $request->input('no_hp');
    // $mahasiswa->update();
    return redirect()->route('mahasiswa.index')->with('status', 'Data Mahasiswa berhasil diubah');
}
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('status', 'Data Mahasiswa berhasil dihapus');
        
    }
}