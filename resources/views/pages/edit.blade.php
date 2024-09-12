@extends('layouts.main')

@section('title')
Edit
@endsection

@section('content')
<div class="col-md-8 mx-auto my-4">
    <a href="{{route('mahasiswa.index')}}"><button class="btn btn-secondary mt-1 mb-4">Kembali</button></a>
    <div class="card">
        <div class="card-header">
            Edit Data Mahasiswa
        </div>
        <div class="card-body">
            <form action="{{ route('mahasiswa.update', ['id' => $mhs->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $mhs->nama) }}">
                </div>
                
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim', $mhs->nim) }}">
                </div>
                
                <div class="form-group mt-1">
                    <label for="program_studis_id">Program Studi</label>
                    <select class="form-control" id="program_studis_id" name="program_studis_id">
                        <option value="" disabled selected hidden>Pilih Program Studi</option>
                        @foreach($prodi as $prd)
                            <option value="{{ $prd->id }}" {{ $prd->id == $mhs->program_studis_id ? 'selected' : '' }}>
                                {{ $prd->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection