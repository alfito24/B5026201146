@extends('layouts.home')
@section('content')
@foreach ($tugas as $tgs)
<form action="/task/update" method="post">
  @csrf
 <div class="row mx-5">
     <div class="col-md-10">
      <input type="hidden" name="id" value="{{ $tgs ->ID }}">
      <div class="mb-3">
          <label for="IDTugas" class="form-label">IDTugas</label>
          <input value="{{ $tgs->IDTugas }}" name="idtugas" value="" type="number" class="form-control" id="IDTugas" aria-describedby="emailHelp">
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
      <div class="mb-3">
            <label for="NamaTugas" class="form-label">Nama Tugas</label>
            <input value="{{ $tgs->NamaTugas }}" name="namatugas" type="text" class="form-control" id="NamaTugas">
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input value="{{ $tgs->Status }}" name="status" type="text" class="form-control" id="status">
          </div> <br>
          <button type="submit" class="btn btn-primary mt-5">Submit</button>
     </div>
 </div>
</form>
@endforeach
@endsection

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
