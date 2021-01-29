@extends('layout/main');

@section('title','Web Programing DB')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">

    <h1 class="mt-2">TAMBAH NILAI</h1>

    <form method="POST" action="/scores">
      @csrf
      <div class="mb-3">
      <label for="namamhs" class="form-label">Nama Mahasiswa</label>
        <select class="form-select" aria-label="Default select example" name = "id">
        @foreach ($data as $mhs)
          <option value="{{$mhs->id}}">{{$mhs->nama}} - {{$mhs->NIM}}</option>
        @endforeach
        </select>
      </div>

      <div class="mb-3">
      <label for="namamk" class="form-label">Nama Mata Kuliah</label>
        <select class="form-select" aria-label="Default select example" name="id_course">
        @foreach ($matkul as $mk)
          <option value="{{$mk->id_course}}">{{$mk->nama_mk}}</option>
        @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="Nilai" class="form-label">Nilai</label>
        <input type="number" class="form-control  @error ('nilai') is-invalid @enderror" id="nilai" placeholder="Masukan Nilai" name="nilai" value="{{old('nilai')}}">
        @error('nilai')
      <div id="nilai" class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      </div>

      <button type="submit" class="btn btn-primary">Tambah Data!</button>
    </form>

    </div>
  </div>
</div>
@endsection
