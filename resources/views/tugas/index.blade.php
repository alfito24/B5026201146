<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tabel Tugas</title>
  </head>
  <body>
      <h1 class="text-center">
          Data Tugas
      </h1>
    <a href="/task/tambah" class="btn btn-primary mb-3">Tambah Tugas Baru</a>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col">ID Tugas</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Nama Tugas</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
            @foreach($tugas as $tgs)
		<tr>
            <td>{{ $tgs->IDTugas }}</td>
			<td>{{ $tgs->Tanggal}}</td>
			<td>{{ $tgs->NamaTugas}}</td>
			<td>{{ $tgs->Status}}</td>
			<td>
				<a class="btn btn-success" href="/task/edit/{{ $tgs->IDTugas }}">Edit</a>
				<a class="btn btn-danger" href="/task/hapus/{{ $tgs->IDTugas }}">Hapus</a>
			</td>
		</tr>
		@endforeach
          </thead>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
