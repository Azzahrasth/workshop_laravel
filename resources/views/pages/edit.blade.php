@extends('layouts.main')

@section('title')
Edit
@endsection

@section('content')
<div class="col-md-8 mx-auto my-4">
    <a href="{{route('index')}}"><button class="btn btn-secondary mt-1 mb-4">Kembali</button></a>
    <div class="card">
    <div class="card-header">
        Edit Data Mahasiswa
    </div>
    <div class="card-body">

        <form action="{{route('update')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" id="id" name="id" value="{{$mhs->id}}">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{$mhs->nama}}">
            </div>
            <div class="form-group">
                <label for="nama">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{$mhs->nim}}">
            </div>
            <div class="form-group mt-1">
                <label for="program_studis_id">Program Studi</label>
                <input type="hidden" class="form-control" id="prodi_id" name="prodi_id" value="{{$mhs->id}}">
                <select class="form-control" id="program_studis_id" name="program_studis_id" value="{{$mhs->program_studis_id}}">
                    <option value="-1" disabled selected hidden>Ubah</option>
                    @foreach($prodi as $prd)
                    <option {{ $prd->id == $mhs->program_studis_id ? "selected" : ""}} value="{{$prd->id}}">{{$prd->nama}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
    </div>
</div>
@endsection