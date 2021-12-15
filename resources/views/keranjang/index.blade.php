@extends('layouts.home')
@section('title', 'Keranjang')
@section('crumb', 'Halaman Keranjang')
	@section('content')
    <h1 class="text-center">Data Keranjang</h1>
	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
            <th>Total</th>
			<th>Opsi</th>
		</tr>
		@foreach($keranjang as $p)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ number_format($p->Harga) }}</td>
            <td>{{ number_format($p->Jumlah * $p->Harga) }}</td>
			<td>
				<a href="/keranjang/beli" class="btn btn-success" >Beli</a>
				|
				<a href="/keranjang/hapus/{{ $p->ID }}" class="btn btn-danger" >Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $keranjang->links() }}
    @endsection
