    @section('title', 'Pegawai')
    @section('crumb', 'Halaman Pegawai')
    @extends('layouts.home')
    @section('content')
	<h1 class="text-center">Data Pegawai</h1>
	<a class="btn btn-primary" href="/pegawai"> Kembali</a>
	<br/>
	<br/>
    <form action="/pegawai/store" method="post">
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type=text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label for="jabatan">Jabatan</label>
          <input type="text" class="form-control" id=jabatan" name="jabatan">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      @endsection
