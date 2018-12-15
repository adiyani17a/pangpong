<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return view('page.berita_desa_list');
    }

    public function berita_desa()
    {
    	return view('page.berita_desa');
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
