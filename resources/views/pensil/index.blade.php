@extends('layouts.home')
@section('title', 'Data Pensil')
@section('crumb', 'Halaman Pensil')
	@section('content')
    <h1 class="text-center">Data Pensil</h1>
	<a href="/pensil/tambah" class="btn btn-primary" > + Tambah Pensil Baru</a>
    <form style="margin-top: 20px" class="mt-3" action="/pensil/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Merk Pensil .." value="{{ old('cari') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>
	<br/>

	<div class="row">
        <div class="col-md-8">
            <table class="table table-success table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>Merk Pensil</th>
                    <th>Tersedia</th>
                    <th>Opsi</th>
                </tr>
                @foreach($pensil as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->merkpensil }}</td>
                    <td>{{ $p->tersedia }}</td>
                    <td>
                        <a href="/pensil/detail/{{ $p->kodepensil }}" class="btn btn-primary">Detail</a>
                        |
                        <a href="/pensil/edit/{{ $p->kodepensil }}" class="btn btn-success" >Edit</a>
                        |
                        <a href="/pensil/hapus/{{ $p->kodepensil }}" class="btn btn-danger" >Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{ $pensil->links() }}
    @endsection
