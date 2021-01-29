@extends('layout/main');

@section('title','Detail Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-12">
    <h1 class="mt-2">Detail Mahasiswa</h1>
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$student->nama}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$student->NIM}}</h6>
    <p class="card-text">{{$student->email}}</p>
    <p class="card-text">{{$student->jurusan}}</p>

    <a href="/students/{{ $student->id }}/edit" class="btn btn-primary">Edit</a>


    <form method="POST" action="{{$student->id}}" class="d-inline">
      @method('delete')
      @csrf
      <button type="subtmit" class="btn btn-danger">Delete</button>
    </form>

    <a href="\students" class="card-link" style="text-decoration:none;">Back</a>
  </div>
</div>
    </div>
  </div>
</div>
@endsection
