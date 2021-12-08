@section('title', 'Pensil')
@section('crumb', 'Halaman Pensil')
@extends('layouts.home')
@section('content')
<h1 class="text-center">Data Pensil</h1>
<a class="btn btn-primary" href="/pensil"> Kembali</a>
<br/>
<br/>
<form action="/pensil/store" method="post">
    @csrf
    <div class="form-group">
      <label for="merk">Merk Pensil</label>
      <input type=text" class="form-control" id="merk" name="merk">
    </div>
    <div class="form-group">
      <label for="stock">Stock Pensil</label>
      <input type="number" class="form-control" id=stock" name="stock">
    </div>
    <div class="form-group">
        Status
        <input type="radio" id="hadir" name="tersedia" value="T">
        <label for="hadir">Tersedia</label>
        <input type="radio" id="tidak" name="tersedia" value="K">
        <label for="tidak">Kosong</label><br>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  @endsection
