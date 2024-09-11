<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use App\Models\ProgramStudi;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        if (request()->has('search')) {
            $mahasiswas = Mahasiswa::with('program_studis')
            ->where('nama', 'LIKE', '%'.request()->search.'%')
            ->get();

        } else {
             $mahasiswas = Mahasiswa::with('program_studis')
            ->get();
        }
        
        return view('pages.index', ['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
        $prodi = ProgramStudi::all();
        
        return view('pages.create', ['prodi' => $prodi]);
    }

    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'program_studis_id' => $request->program_studis_id,
        ]);

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $prodi = ProgramStudi::all();

        return view('pages.edit', ['mhs' => $mahasiswa, 'prodi' => $prodi]);
    }

    public function update(Request $request)
    {
        $mahasiswa = Mahasiswa::findOrFail($request->id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->program_studis_id = $request->program_studis_id;
        $mahasiswa->save();

        return redirect()->route('index');
    }

    public function delete($id)
    {
        Mahasiswa::findOrFail($id)->delete();

        return redirect()->route('index');
    }
    
}
