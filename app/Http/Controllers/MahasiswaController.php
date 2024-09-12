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

        return redirect()->route('mahasiswa.index');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $prodi = ProgramStudi::all();

        return view('pages.edit', ['mhs' => $mahasiswa, 'prodi' => $prodi]);
    }

 public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'nim' => 'required|string|max:20',
        'program_studis_id' => 'required|integer|exists:program_studis,id',
    ]);

    // Temukan mahasiswa berdasarkan ID
    $mahasiswa = Mahasiswa::findOrFail($id);

    // Perbarui data mahasiswa
    $mahasiswa->update([
        'nama' => $request->nama,
        'nim' => $request->nim,
        'program_studis_id' => $request->program_studis_id,
    ]);

    // Redirect ke route 'index'
    return redirect()->route('mahasiswa.index');
}

    public function destroy($id)
    {
        Mahasiswa::findOrFail($id)->delete();

        return redirect()->route('mahasiswa.index');
    }
    
}
