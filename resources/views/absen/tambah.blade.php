@extends('layouts.home')

@section('title', 'Data Absen')
@section('crumb', 'Halaman Absen')
@section('content')
    <h1 class="text-center">Tambah Data Absen</h1>
	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id""> <br/>
        <div class="form-group">
            <label for="IDPegawai">Nama Pegawai</label>
            <select class="col-md-12" id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $peg)
                    <option class="mb-3" value="{{ $peg->pegawai_id }}"> {{ $peg->pegawai_nama }}</option>
                @endforeach
            </select>
        </div>
        <br>
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
        <input type="radio" id="hadir" name="status" value="H">
        <label for="hadir">HADIR</label>
        <input type="radio" id="tidak" name="status" value="T">
        <label for="tidak">TIDAK HADIR</label><br>

		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
    @endsection
