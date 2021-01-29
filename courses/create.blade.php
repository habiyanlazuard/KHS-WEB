@extends('layout/main');

@section('title','Tambah Data Mata Kuliah')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">

    <h1 class="mt-2">TAMBAH DATA MATA KULIAH</h1>

      <div class="mb-3">
        <label for="nama_mk" class="form-label">Mata Kuliah</label>
        <input type="text" class="form-control @error ('nama_mk') is-invalid @enderror" id="nama_mk" placeholder="Masukan Nama Mata Kuliah" name="nama_mk" value="{{old('nama_mk')}}">
      @error('nama_mk')
      <div id="nama_mk" class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      </div>

      <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" class="form-control  @error ('sks') is-invalid @enderror" id="sks" placeholder="Masukan Jumlah SKS" name="sks" value="{{old('sks')}}">
        @error('sks')
      <div id="sks" class="invalid-feedback">
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
