<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class pageController extends Controller
{
    public function profil_desa()
    {
    	return view('page.profil_desa');
    }

    public function wilayah()
    {
    	return view('page.wilayah');
    }

    public function pemerintahan()
    {
    	return view('page.pemerintahan');
    }

    public function berita_desa_list()
    {
        $data = DB::table('carousel')->get();
        $foto = DB::table('foto')->get();
        $perangkat_desa = DB::table('perangkat_desa')->get();
        $berita = DB::table('berita')->join('users','users.id','=','created_by')->paginate(5);
    	return view('page.berita_desa_list',compact('data','foto','perangkat_desa','berita'));
    }

    public function page_berita_desa_list(Request $req)
    {
        $berita = DB::table('berita')->join('users','users.id','=','created_by')->paginate(5);
        return view('page.page_berita_list',compact('berita'));
    }

    public function berita_desa(Request $req)
    {
        $berita = DB::table('berita')->join('users','users.id','=','created_by')->where('berita.id',$req->id)->first();
        $foto = DB::table('foto')->get();
    	return view('page.berita_desa',compact('berita','foto'));
    }

    public function pengumuman_list()
    {
    	return view('page.pengumuman_list');
    }

    public function pengumuman()
    {
    	return view('page.pengumuman');
    }

    public function kontak()
    {
    	return view('page.kontak');
    }
}
