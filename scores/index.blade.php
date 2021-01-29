@extends('layout/main');

@section('title','Nilai Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-12">
    <h1 class="mt-2">DAFTAR NILAI</h1>

    <a href="/scores/create" class="btn btn-primary my-3">Tambah Nilai</a>
    <!-- <a href="/scores/lihat" class="btn btn-primary my-3">Lihat Data Nilai</a> -->

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

  <ul class="list-group col-5">
  @foreach ($students as $student)
  <li class="list-group-item d-flex justify-content-between align-items-center">

    {{$student->nama}}

    <a href="\scores\{{$student->id}}" class="badge bg-info" style="color:white;text-decoration:none;"> Lihat Nilai </a>



  </li>
  @endforeach
</ul>
    </div>
  </div>
</div>
@endsection 
