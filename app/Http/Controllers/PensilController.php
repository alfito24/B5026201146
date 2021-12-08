<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
    public function index()
    {
    	$pensil = DB::table('pensil')->paginate(5);
        // $pensil = DB::table('pensil')
        // ->join('pegawai', 'pensil.kodepensil', '=', 'pegawai.pegawai_id')
        // ->select('pensil.*', 'pegawai.pegawai_nama')
        // ->paginate(3);
    	return view('pensil.index',['pensil' => $pensil]);
    }
    public function tambah(){
    $pensil= DB::table('pensil')->get();
	return view('pensil.tambah', compact('pensil'));
    }
    public function store(Request $request){
        DB::table('pensil')->insert([
            'merkpensil' => $request->merk,
            'stockpensil' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/pensil');
    }
    public function cari(Request $request)
	{
		$cari = $request->cari;
		$pensil = DB::table('pensil')
		->where('merkpensil','like',"%".$cari."%")
		->paginate();
		return view('pensil.index',['pensil' => $pensil]);
	}
    public function edit($id){
	$pensil = DB::table('pensil')->where('kodepensil',$id)->get();
	return view('pensil.edit',['pensil' => $pensil]);
    }
    public function update(Request $request){
	DB::table('pensil')->where('kodepensil',$request->id)->update([
        'merkpensil' => $request->merk,
		'stockpensil' => $request->stock,
		'tersedia' => $request->tersedia,
	]);
	return redirect('/pensil');
    }
    public function hapus($id){
	DB::table('pensil')->where('kodepensil',$id)->delete();
	return redirect('/pensil');
    }
    public function detail($id){
        $pensil = DB::table('pensil')->where('kodepensil',$id)->first();
        return view('pensil.detail', compact('pensil'));
        }

}
