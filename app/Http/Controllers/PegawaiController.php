<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
    	$pegawai = DB::table('pegawai')->paginate(10);
    	return view('pegawai.index',['pegawai' => $pegawai]);
    }
    public function tambah()
    {
	return view('pegawai.tambah');
    }
    public function cari(Request $request)
	{
		$cari = $request->cari;
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();
		return view('pegawai.index',['pegawai' => $pegawai]);
	}
    public function store(Request $request)
    {
	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	return redirect('/pegawai');
    }
    public function edit($id)
    {
	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	return view('pegawai.edit',['pegawai' => $pegawai]);
    }
    public function view($id){
    $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	return view('pegawai.detail',['pegawai' => $pegawai]);
    }
public function update(Request $request)
    {
	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	return redirect('/pegawai');
    }
public function hapus($id)
    {
	DB::table('pegawai')->where('pegawai_id',$id)->delete();
	return redirect('/pegawai');
    }
}
