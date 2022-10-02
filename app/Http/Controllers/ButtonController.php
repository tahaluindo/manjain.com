<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ButtonController extends Controller
{
    //
    public function lihatPerusahaan(){
        $data = DB::table('perusahaans')->first();
        return view('lihatPerusahaan', ['data'=>$data]);
    }
    public function showList(){
        return view('list');
    }
    public function showBuatLowongan(){
        return view('buatLowongan');
    }
    public function showBuatPerusahaan(){
        return view('buatPerusahaan');
    }
    public function showEditLowongan( $id){
        $row = DB::table('lowongans')->where('id',$id)->first();


        $data = [
            'Info'=>$row
        ];

        return view('editLowongan',$data);
    }

    public function update(Request $request){
        $datapemilik = Perusahaan::where('id', $request->input('idperusahaan'))->first();
        $request->validate([
            'judul'=>'required',
            'kategori'=>'required',
            'gaji'=>'required',
            'jadwal'=>'required',
            'deskripsi'=>'required',
            'cara'=>'required'
        ]);

        $updating = DB::table('lowongans')->where('id', $request->input('id'))->update([
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

        if($updating){
            return back()->with('success','Data Berhasil Diupdate');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function delete($id){
        $delete = DB::table('lowongans')->where('id',$id)->delete();

        if($delete){
            return back()->with('success','Data Berhasil Dihapus');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
    public function showHalamanLowongan(){
        return view('halamanLowongan');
    }
    public function showProfilPerusahaan(){
        return view('profilPerusahaan');
    }
    public function showHomePemilik(){
        return view('homePemilik');
    }

    public function showTentang(){
        return view('lihatTentang');
    }
}
