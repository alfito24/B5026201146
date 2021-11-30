    @section('title', 'Pegawai')
    @section('crumb', 'Halaman Pegawai')
    @extends('layouts.home')
    @section('content')
	<h1 class="text-center">Data Pegawai</h1>
	<a class="btn btn-primary" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <table class="table table-striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-success" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection
