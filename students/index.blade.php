@extends('layout/main');

@section('title','Mahasiswa')

@section('container')

<div class="container">
  <div class="row">
    <div class="col-10">
    <h1 class="mt-2">DAFTAR MAHASISWA</h1>

    <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

  <ul class="list-group col-6">
  @foreach ($students as $student)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{$student->nama}}
    <a href="\students\{{$student->id}}" class="badge bg-info" style="color:white;text-decoration:none;"> Detail </a>
  </li>
  @endforeach
</ul>
    </div>
  </div>
</div>
@endsection
