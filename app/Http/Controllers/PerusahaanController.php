<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    function index(){
        $data = Perusahaan::where('pemilik', Auth::user()->name)->get();
        return view('dashboard',['data'=>$data]);
    }

    function lihatPerusahaan(){
        
        return view('lihatPerusahaan');
    }

    function show(Perusahaan $perusahaan){
        $datapemilik = Lowongan::where('idperusahaan', $perusahaan->id)->get();
        if($datapemilik!="[]"){
            return view('perusahaan', ['perusahaan'=>$datapemilik]);
        }else{
            return view('perusahaanKosong',['perusahaan'=>$perusahaan]);
        }
        
    }

    function showPerusahaanData(){
        $data = Perusahaan::where('pemilik', Auth::user()->name)->get();
        return view('dashboard',['data'=>$data]);
    }

    function showBuatLowongan(Perusahaan $perusahaan2,$id){
        return view('buatLowongan', ['perusahaan'=>$id]);
    }

    function addPerusahaan(Request $request){
        $pemilik = Auth::user()->name;

        $imgName = $request->logo->getClientOriginalName();
        $request->logo->move(public_path('img'),$imgName);


        $request->validate([
            'nama'=>'required',
            'industri'=>'required',
            'alamat'=>'required',
            'situs'=>'required',
            'deskripsi'=>'required'
        ]);
        
        $query = DB::table('perusahaans')->insert([
            'perusahaan'=>$request->input('nama'),
            'pemilik'=>$pemilik,
            'industri'=>$request->input('industri'),
            'alamat'=>$request->input('alamat'),
            'situs'=>$request->input('situs'),
            'deskripsi'=>$request->input('deskripsi'),
            'logo'=>$imgName
        ]);

        if($query){
            return back()->with('success','Perusahaan ditambahkan');
        }else{
            return back()->with('tes');
        }
        
    }

    

}
