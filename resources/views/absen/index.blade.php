@extends('layouts.home')
@section('title', 'Data Absen')
@section('crumb', 'Halaman Absen')
	@section('content')
    <h1 class="text-center">Data Absen</h1>
	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>
	<form style="margin-top: 20px" class="mt-3" action="/absen/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>No</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-success" >Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}
    @endsection
