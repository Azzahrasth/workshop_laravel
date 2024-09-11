@extends('layouts.main')

@section('title')
Mahasiswa
@endsection

@section('content')
<div class="col-md-8 mx-auto my-4">
    <div class="card">
        <div class="card-header">
            Data Mahasiswa
        </div>
        <div class="col-md-12 card-body">
            <a href="{{route('create')}}"><button class="btn btn-success mt-1 mb-4">Tambah</button></a>

            <form action="{{route('index')}}" method="GET">
                <div class="col-md-3 input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari mahasiswa" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>

            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $key => $mhs)
                <tr>
                    <td>{{$key + 1}}</td> <!-- Menampilkan nomor urut -->
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->program_studis->nama}}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{route('edit', ['id' => $mhs->id])}}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <form action="{{route('delete', ['id' => $mhs->id])}}" method="POST" class="mx-1">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
