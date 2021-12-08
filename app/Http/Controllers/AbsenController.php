<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function index()
    {
    	// $absen = DB::table('absen')->paginate(10);
        $absen = DB::table('absen')
        ->join('pegawai', 'absen.ID', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->paginate(3);
    	return view('absen.index',['absen' => $absen]);
    }
    public function cari(Request $request)
	{
		$cari = $request->cari;
        $absen = DB::table('absen')
        ->join('pegawai', 'absen.ID', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();
		return view('absen.index',['absen' => $absen]);
	}
public function tambah(){
    $pegawai= DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
	return view('absen.tambah', compact('pegawai'));
}
public function store(Request $request)
    {
        DB::table('absen')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        return redirect('/absen');
    }
public function edit($id)
{
	$absen = DB::table('absen')->where('ID',$id)->get();
    $pegawai= DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
	return view('absen.edit',compact(['absen', 'pegawai']));
}

public function update(Request $request)
{
	DB::table('absen')->where('ID',$request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
	]);
	return redirect('/absen');
}
public function hapus($id){
	DB::table('absen')->where('ID',$id)->delete();
	return redirect('/absen');
    }
}

