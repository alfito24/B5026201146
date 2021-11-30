@extends('layouts.home')
      @section('content')
      <h1 class="text-center">
        Data Tugas
    </h1>
  <a href="/task/tambah" class="btn btn-primary mb-3">Tambah Tugas Baru</a>
  <table class="table table-striped">
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
              <a class="btn btn-success" href="/task/edit/{{ $tgs->ID }}">Edit</a>
              <a class="btn btn-danger" href="/task/hapus/{{ $tgs->ID }}">Hapus</a>
          </td>
      </tr>
      @endforeach
        </thead>
  </table>
      @endsection
