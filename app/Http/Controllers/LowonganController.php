<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowonganController extends Controller
{
    function index(){
        $data = array(
            'list'=>DB::table('lowongans')->get()
        );
        return view('list', $data);
    }

    function addLowongan(Request $request){
        $datapemilik = Perusahaan::where('id', $request->input('idperusahaan'))->first();
        $request->validate([
            'judul'=>'required',
            'kategori'=>'required',
            'gaji'=>'required',
            'jadwal'=>'required',
            'deskripsi'=>'required',
            'cara'=>'required'
        ]);

        $query = DB::table('lowongans')->insert([
            'judul'=>$request->input('judul'),
            'idperusahaan'=>$request->input('idperusahaan'),
            'kategori'=>$request->input('kategori'),
            'gaji'=>$request->input('gaji'),
            'jadwal'=>$request->input('jadwal'),
            'deskripsi'=>$request->input('deskripsi'),
            'cara'=>$request->input('cara'),
            'perusahaan'=>$datapemilik->perusahaan,
            'pemilik'=>$datapemilik->pemilik,
            'industri'=>$datapemilik->industri,
            'alamat'=>$datapemilik->alamat,
            'situs'=>$datapemilik->situs,
            'deskripsiP'=>$datapemilik->deskripsi,
            'logo'=>$datapemilik->logo
        ]);

        if($query){
            return back()->with('success','Lowongan ditambahkan');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
