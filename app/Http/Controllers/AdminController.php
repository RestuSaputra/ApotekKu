<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //-----------------------PEGAWAI-----------------------------------------
    public function informasiPegawai()
    {
    	$pegawai = DB::table('pegawai')->get();
    	return view('/admin/informasiPegawai',['pegawai' => $pegawai]);
    }


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
			'pegawai_photo' => $request->photoPegawai

		]);

		return redirect('/informasiPegawai');
	}

	//Method Hapus Pegawai
	public function hapuspegawai($id)
	{
		DB::table('pegawai')->where('pegawai_id', $id)->delete();

		return redirect('/informasiPegawai');
	}

	
	//---------------------------------OBAT--------------------------

	public function informasiObat()
    {
    	$obat = DB::table('obat')->get();
    	return view('/admin/informasiObat',['obat' => $obat]);
    }

    public function tambahobat()
    {
    	return view('tambahobat');
    }


    public function storeobat(Request $request)
    {
    	DB::table('obat')->insert([
    		'nama_obat' => $request->namaObat,
    		'jenis_obat' => $request->jenisObat,
    		'dosis_obat' => $request->dosisObat,
    		'kegunaan_obat' => $request->kegunaanObat,
    		'harga_obat' => $request->hargaObat,
    		'stok_obat' => $request->stokObat,
    		'kadaluarsa' => $request->kadaluarsa
    	]);
    	return redirect('informasiObat');
    }

    public function editobat($id)
    {
    	$obat = DB::table('obat')->where('kode_obat', $id)->get();
    	return view('editobat', ['obat' => $obat]);
    }

    public function updateobat(Request $request)
    {
    	DB::table('obat')->where('kode_obat', $request->id)->update([
    		'nama_obat' => $request->namaObat,
    		'jenis_obat' => $request->jenisObat,
    		'dosis_obat' => $request->dosisObat,
    		'kegunaan_obat' => $request->kegunaanObat,
    		'harga_obat' => $request->hargaObat,
    		'stok_obat' => $request->stokObat,
    		'kadaluarsa' => $request->kadaluarsa
    	]);
    	return redirect('informasiObat');
    }

    public function hapusobat($id)
    {
    	DB::table('obat')->where('kode_obat', $id)->delete();
    	return redirect('informasiObat');
    }

    //-----------------------------------------------------
    public function kembali()
    {
    	return view ('/menuadmin');
    }
}
