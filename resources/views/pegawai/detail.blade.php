@section('title', 'Pegawai')
@section('crumb', 'Halaman Pegawai')
@extends('layouts.home')
@section('content')
<h1 class="text-center">Data Pegawai</h1>
<a class="btn btn-primary" href="/pegawai"> Kembali</a>
<br/>
<br/>
@foreach ($pegawai as $p )
<div class="form-group">
    <label for="nama">Nama</label>
    <input value="{{ $p->pegawai_nama }}" readonly type=text" class="form-control" id="nama" name="nama">
  </div>
  <div class="form-group">
    <label for="jabatan">Jabatan</label>
    <input value="{{ $p->pegawai_jabatan }}" readonly type="text" class="form-control" id=jabatan" name="jabatan">
  </div>
  <div class="form-group">
      <label for="umur">Umur</label>
      <input value="{{ $p->pegawai_umur }}" readonly type="number" class="form-control" id="umur" name="umur">
  </div>
  <div class="form-group">
      <label for="alamat">Alamat</label>
      <input value="{{ $p->pegawai_alamat }}" readonly type="text" class="form-control" id="alamat" name="alamat">
    </div>
@endforeach

  @endsection
