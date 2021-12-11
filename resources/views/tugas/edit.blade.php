{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body> --}}
      @extends('layouts.home')
      @section('title', 'Tugas')
      @section('content')
      @section('crumb', 'Halaman Tugas')
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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html> --}}
