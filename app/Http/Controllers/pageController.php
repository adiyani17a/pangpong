<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function profil_desa()
    {
    	return view('page.profil_desa');
    }
}
