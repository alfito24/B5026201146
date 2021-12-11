    @section('title', 'Pegawai')
    @section('crumb', 'Halaman Pegawai')
    @extends('layouts.home')
    @section('content')
	<h1 class="text-center">Data Pegawai</h1>
	<a class="btn btn-primary" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
    <form style="margin-top: 20px" class="mt-3" action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>
	<br/>
    <table class="table table-striped">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a class="btn btn-primary" href="/pegawai/detail/{{ $p->pegawai_id }}">Detail</a> |
				<a class="btn btn-success" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}
    @endsection
