@extends('layouts.home')
@section('title', 'Data Pensil')
@section('crumb', 'Pensil')
	@section('content')
    <h1 class="text-center">Data Pensil</h1>
	<a href="/pensil" class="btn btn-primary" >Kembali</a>
	<br/>
	<br/>
	<div class="row text-center">
        <div class="col-md-8">
            <table class="table table-success table-striped table-hover">
                <th>
                    <tr>
                        <td>Merk Pensil</td>
                        <td>:</td>
                        <td>{{ $pensil->merkpensil }}</td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                        <td>:</td>
                        <td>{{ $pensil->stockpensil }}</td>
                    </tr>
                    <tr>
                        <td>Tersedia</td>
                        <td>:</td>
                        <td>{{$pensil->tersedia}}</td>
                    </tr>
                </th>
            </table>
        </div>
    </div>
    @endsection
