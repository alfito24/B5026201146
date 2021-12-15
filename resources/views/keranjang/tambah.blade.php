@section('title', 'keranjang')
@section('crumb', 'Halaman keranjang')
@extends('layouts.home')
@section('content')
<h1 class="text-center">Data keranjang</h1>
<a class="btn btn-primary" href="/keranjang"> Kembali</a>
<br/>
<br/>
<form action="/keranjang/store" method="post">
    @csrf
    {{-- <div class="form-group">
      <label for="kodebarang">Kode Barang</label>
      <input type="number="form-control" id="kodebarang" name="kodebarang">
    </div> --}}
    <div class="form-group">
        <label for="kodebarang">Kode Barang</label>
        <input type="number" class="form-control" id=kodebarang" name="kodebarang">
      </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="number" class="form-control" id=jumlah" name="jumlah">
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id=harga" name="harga">
      </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  @endsection
