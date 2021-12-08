
@extends('layouts.home')
	@section('content')
    <h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class="row mx-5">
            <div class="col-md-10">
             <div class="mb-3">
                 <label for="nama" class="form-label">Nama Pegawai</label>
                 <input value="{{ $p->pegawai_nama}}" name="nama" type="text" class="form-control" id="merk">
             </div>
             <div class="mb-3">
                   <label for="jabatan" class="form-label">Jabatan</label>
                   <input value="{{ $p->pegawai_jabatan }}" name="jabatan" type="number" class="form-control" id="jabatan">
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input value="{{ $p->pegawai_umur }}" name="umur" type="number" class="form-control" id="umur"> <br>
            <div class="mb-3 mt-3">
                <label for="alamat" class="form-label">Alamat</label> <br>
                <textarea class="mt-3 col-12" name="alamat" id="alamat" cols="60" rows="5">{{ $p->pegawai_alamat }}</textarea>
            </div>
                 <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </div>
        </div>
		{{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>
	@endforeach

    @endsection


