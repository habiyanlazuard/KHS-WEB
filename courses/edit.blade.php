@extends('layout/main');

@section('title','Ubah Data Mata Kuliah')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">

    <h1 class="mt-2">UBAH DATA MATA KULIAH</h1>

    <form method="POST" action="/courses/{{$course->id_course}}">
      @method('patch')
      @csrf

      <div class="mb-3">
        <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control @error ('nama_mk') is-invalid @enderror" id="nama_mk" placeholder="Masukan Nama Mata Kuliah" name="nama_mk" value="{{$course->nama_mk}}">
      @error('nama_mk')
      <div id="nama_mk" class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      </div>

      <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" class="form-control  @error ('sks') is-invalid @enderror" id="sks" placeholder="Masukan SKS" name="sks" value="{{$course->sks}}">
        @error('sks')
      <div id="sks" class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      </div>
      <button type="submit" class="btn btn-primary">Ubah Data!</button>
    </form>

    </div>
  </div>
</div>
@endsection
