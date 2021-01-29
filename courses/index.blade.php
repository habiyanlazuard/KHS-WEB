@extends('layout/main');

@section('title','DAFTAR MATA KULIAH')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
    <h1 class="mt-2">DAFTAR MATA KULIAH</h1>
    <a href="/courses/create" class="btn btn-primary my-3">Tambah Data Mata Kuliah</a>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <table class="table">
  <thead class="table-dark">
  	<tr>
    <th scope="col">#</th>
    <th scope="col">NAMA MATA KULIAH</th>
    <th scope="col">SKS</th>
    <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($courses as $course)
    <tr>
    	<th scope="row">{{ $loop->iteration }}</th>
    	<td>{{$course->nama_mk}}</td>
    	<td>{{$course->sks}}</td>
    	<td>

        <a href="/courses/{{ $course->id_course }}/edit" class="btn btn-primary">Edit</a>

        <form method="POST" action="/courses/{{$course->id_course}}" class="d-inline">
            @method('delete')
            @csrf
            <button type="subtmit" class="btn btn-danger">Delete</button>
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
