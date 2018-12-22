<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class pageController extends Controller
{
    public function profil_desa()
    {
        $berita = DB::table('berita')->select('berita.*','name','berita.created_at as tanggal')->join('users','users.id','=','created_by')->take(3)->orderBy('berita.created_at','DESC')->get();
        $desa = DB::table('profil_desa')->first();
        $foto = DB::table('foto')->take(9)->get();
    	return view('page.profil_desa',compact('desa','berita','foto'));
    }

    public function wilayah()
    {

        $berita = DB::table('berita')->select('berita.*','name','berita.created_at as tanggal')->join('users','users.id','=','created_by')->take(3)->orderBy('berita.created_at','DESC')->get();
        $desa = DB::table('wilayah')->first();
        $foto = DB::table('foto')->take(9)->get();
        return view('page.wilayah',compact('desa','berita','foto'));
    }

    public function pemerintahan()
    {

        $berita = DB::table('berita')->select('berita.*','name','berita.created_at as tanggal')->join('users','users.id','=','created_by')->take(3)->orderBy('berita.created_at','DESC')->get();
        $pemerintahan = DB::table('pemerintah')->first();
        $foto = DB::table('foto')->take(9)->get();
        $perangkat = DB::table('perangkat_desa')->get();
        return view('page.pemerintahan',compact('pemerintahan','berita','foto','perangkat'));
    }

    public function berita_desa_list()
    {
        $data = DB::table('carousel')->get();
        $foto = DB::table('foto')->take(9)->get();
    	return view('page.berita_desa_list',compact('data','foto','perangkat_desa','berita'));
    }

    public function page_berita_desa_list(Request $req)
    {
        $berita = DB::table('berita')->selectRaw("name,berita.*,berita.id as berita_id,berita.created_at as tanggal")->join('users','users.id','=','created_by')->orderBy('berita.created_at','DESC')->paginate();
        return view('page.page_berita_list',compact('berita'));
    }

    public function berita_desa(Request $req)
    {
        $berita = DB::table('berita')->selectRaw("name,berita.*,berita.id as berita_id,berita.created_at as tanggal")->join('users','users.id','=','created_by')->where('berita.id',$req->id)->first();
        $foto = DB::table('foto')->take(9)->get();
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

    public function potensi_desa_list()
    {
        $data = DB::table('carousel')->get();
        $foto = DB::table('foto')->take(9)->get();
        $perangkat_desa = DB::table('perangkat_desa')->get();
        return view('page.potensi_desa_list',compact('data','foto','perangkat_desa','berita'));
    }


    public function page_potensi_desa_list(Request $req)
    {
        $potensi = DB::table('potensi')->selectRaw("name,potensi.*,potensi.id as potensi_id,potensi.created_at as tanggal")
                                      ->join('users','users.id','=','created_by')
                                      ->orderBy('potensi.created_at','DESC')
                                      ->where('jenis','potensi_desa')
                                      ->paginate();

        return view('page.page_potensi_desa_list',compact('potensi'));
    }

    public function produk_unggulan_list()
    {
        $data = DB::table('carousel')->get();
        $foto = DB::table('foto')->take(9)->get();
        $perangkat_desa = DB::table('perangkat_desa')->get();
        return view('page.produk_unggulan_list',compact('data','foto','perangkat_desa','berita'));
    }

    public function page_produk_unggulan_list(Request $req)
    {
        $potensi = DB::table('potensi')->selectRaw("name,potensi.*,potensi.id as potensi_id,potensi.created_at as tanggal")
                                      ->join('users','users.id','=','created_by')
                                      ->orderBy('potensi.created_at','DESC')
                                      ->where('jenis','produk_unggulan')
                                      ->paginate();

        return view('page.page_produk_unggulan_list',compact('potensi'));
    }

    public function potensi_desa(Request $req)
    {
        $potensi = DB::table('potensi')->selectRaw("name,potensi.*,potensi.id as potensi_id,potensi.created_at as tanggal")->join('users','users.id','=','created_by')->where('potensi.id',$req->id)->first();
        $foto = DB::table('foto')->take(9)->get();
        return view('page.potensi_desa',compact('potensi','foto'));
    }

    public function produk_unggulan(Request $req)
    {
        $potensi = DB::table('potensi')->selectRaw("name,potensi.*,potensi.id as potensi_id,potensi.created_at as tanggal")->join('users','users.id','=','created_by')->where('potensi.id',$req->id)->first();
        $foto = DB::table('foto')->take(9)->get();
        return view('page.produk_unggulan',compact('potensi','foto'));
    }

    public function kontak()
    {
    	return view('page.kontak');
    }

    public function page_foto()
    {

        $foto = DB::table('foto')->get();
        $berita = DB::table('berita')->selectRaw("name,berita.*,berita.id as berita_id,berita.created_at as tanggal")
                                    ->join('users','users.id','=','created_by')
                                    ->orderBy('berita.created_at','DESC')->take(3)->get();
        return view('page.page_foto',compact('berita','foto'));
    }

    public function page_video()
    {
        $video = DB::table('video')->paginate(3);
        $berita = DB::table('berita')->selectRaw("name,berita.*,berita.id as berita_id,berita.created_at as tanggal")
                                    ->join('users','users.id','=','created_by')
                                    ->orderBy('berita.created_at','DESC')->take(3)->get();
        return view('page.page_video',compact('berita','video'));
    }
}
