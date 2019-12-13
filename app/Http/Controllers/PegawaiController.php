<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
	public function index()
	{
    //mengambil data dari tabel pegawai
		$pegawai = DB::table('pegawai')->get();

    //mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}

	//method untuk menampilkan view form tambah pegawai
	public function tambahpegawai()
	{
		return view('tambahpegawai');
	}

	//method untuk insert data ke table pegawai
	public function storepegawai(Request $request)
	{
		DB::table('pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_alamat' => $request->alamat,
			'pegawai_telepon' => $request->telepon,
			'pegawai_umur' => $request->umur,
			'gaji_pokok' => $request->gajiPokok,
			'pegawai_jenisKelamin' => $request->jenisKelamin,
			'pegawai_status' => $request->statusPegawai,
			'pegawai_tm' => $request->tunjanganMakan,
			'pegawai_tl' => $request->tunjanganLembur,
			'pegawai_thr' => $request->tunjanganHariRaya,
			'pegawai_photo' => $request->photoPegawai
		]);
		//alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	//Method untuk edit Pegawai
	public function editpegawai($id)
	{
		//mengambil data pegawai berdasarkan data yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
		//passing data pegawai yang didapat ke view editpegawai.blade.php
		return view('editpegawai',['pegawai' => $pegawai]);
	}

	//Method Update Pegawai
	public function updatepegawai(Request $request)
	{
		DB::table('pegawai')->where('pegawai_id', $request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_alamat' => $request->alamat,
			'pegawai_telepon' => $request->telepon,
			'pegawai_umur' => $request->umur,
			'gaji_pokok' => $request->gajiPokok,
			'pegawai_jenisKelamin' => $request->jenisKelamin,
			'pegawai_status' => $request->statusPegawai,
			'pegawai_tm' => $request->tunjanganMakan,
			'pegawai_tl' => $request->tunjanganLembur,
			'pegawai_thr' => $request->tunjanganHariRaya,
			'pegawai_photo' => $request->foto

		]);

		return redirect('/pegawai');
	}

	//Method Hapus Pegawai
	public function hapuspegawai($id)
	{
		DB::table('pegawai')->where('pegawai_id', $id)->delete();

		return redirect('/pegawai');
	}
}
