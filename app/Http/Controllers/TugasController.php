<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
    	// $tugas = DB::table('tugas')->paginate(10);
        $tugas = DB::table('tugas')
        ->join('pegawai', 'tugas.IDTugas', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama')
        ->paginate(3);
    	return view('tugas.index',['tugas' => $tugas]);
    }
    public function tambah()
    {
        $pegawai= DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
	return view('tugas.tambah', compact('pegawai'));
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
    public function cari(Request $request)
	{
		$cari = $request->cari;
		$tugas = DB::table('tugas')
		->where('NamaTugas','like',"%".$cari."%")
		->paginate();
		return view('tugas.index',['tugas' => $tugas]);
	}

    public function edit($id)
    {
	$tugas = DB::table('tugas')->where('ID',$id)->get();
	return view('tugas.edit',['tugas' => $tugas]);
    }

    public function update(Request $request)
    {
	DB::table('tugas')->where('ID', $request->id)->update([
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
