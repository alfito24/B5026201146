<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
    	$tugas = DB::table('tugas')->get();
    	return view('tugas.index',['tugas' => $tugas]);
    }
    public function tambah()
    {
	return view('tugas.tambah');
    }
    public function store(Request $request)
    {
	DB::table('tugas')->insert([
		'IDTugas' => $request->idtugas,
		'Tanggal' => $request->tanggal,
		'NamaTugas' => $request->namatugas,
		'Status' => $request->status
	]);
	return redirect('/task');
    }

    public function edit($id)
    {
	$tugas = DB::table('tugas')->where('IDTugas',$id)->get();
	return view('tugas.edit',['tugas' => $tugas]);
    }

    public function update(Request $request)
    {
	DB::table('tugas')->where('IDTugas', $request->idtugas)->update([
		'IDTugas' => $request->idtugas,
		'Tanggal' => $request->tanggal,
		'NamaTugas' => $request->namatugas,
		'Status' => $request->status
	]);
	return redirect('/task');
    }
    public function hapus($id)
    {
	DB::table('tugas')->where('ID',$id)->delete();
	return redirect('/task');
    }
}
