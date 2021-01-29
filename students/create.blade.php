@extends('layout/main');

@section('title','Tambah Data Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">

    <h1 class="mt-2">TAMBAH DATA MAHASISWA</h1>

    <form method="POST" action="/students">
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{old('nama')}}">
      @error('nama')
      <div id="nama" class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      </div>

      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control  @error ('nim') is-invalid @enderror" id="nim" placeholder="Masukan NIM" name="nim" value="{{old('nim')}}">
        @error('nim')
      <div id="nama" class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email" value="{{old('email')}}">
      </div>
      <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{old('jurusan')}}">
      </div>
      <button type="submit" class="btn btn-primary">Tambah Data!</button>
    </form>

    </div>
  </div>
</div>
@endsection
