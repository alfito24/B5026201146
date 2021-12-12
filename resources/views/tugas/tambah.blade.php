@extends('layouts.home')

@section('title', 'Tugas')
@section('crumb', 'Halaman Tugas')
@section('content')
    <h1 class="text-center">Tambah Data Tugas</h1>
   <a href="/task"> <p class="btn btn-primary">Kembali</p></a>
	<form action="/task/store" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id""> <br/>
        {{-- <div class="form-group">
            <label for="idtugas">ID Tugas</label>
            <input type="number" class="form-control" id="idtugas" name="idtugas">
        </div> --}}
        <div class="form-group">
            <label for="IDPegawai">Nama Pegawai</label>
            <select class="col-md-12" id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $peg)
                    <option class="mb-3" value="{{ $peg->pegawai_id }}"> {{ $peg->pegawai_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="namatugas">Nama Tugas</label>
            <input type="text" class="form-control" id="namatugas" name="namatugas">
        </div>
        <div class="form-group mt-3">
            <label for="dtpickerdemo" class="col-sm-2 control-label mt-3">Tanggal</label>
                <div class='col-md-12 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>
		Status
        <input type="radio" id="hadir" name="status" value="S">
        <label for="hadir">Selesai</label>
        <input type="radio" id="tidak" name="status" value="B">
        <label for="tidak">Belum Selesai</label><br>

		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
    @endsection
