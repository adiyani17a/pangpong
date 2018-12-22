<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\models;
use Exception;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;
use Response;
use Session;
use Yajra\Datatables\Datatables;
use Jenssegers\Date\Date;
use App\setting\jabatan;
use carbon\carbon;
use Storage;
class adminController extends Controller
{
    public function dashboard()
    {
    	return view('admin_dashboard');
    }

    public function carousel()
    {
        $data = DB::table('carousel')->get();
    	return view('page.carousel',compact('data'));
    }

    public function save_carousel(Request $req)
    {
        DB::beginTransaction();
        // dd($req->all());
        $file = $req->file('foto');
        for ($i=0; $i < count($req->id); $i++) { 
            if (isset($req->file('foto')[$i])) {
                $file = $req->file('foto')[$i];
                if ($file != null) {
                    $id = $i+1;
                    $file_name = 'carousel_'. $id .'_' . '.' . $file->getClientOriginalExtension();

                    if (!is_dir(storage_path('carousel/'))) {
                        mkdir(storage_path('carousel/'), 0777, true);
                    }

                    $thumbnail_path = storage_path('carousel/');
                    $original_path = storage_path('carousel/');
                    Image::make($file)
                          ->save($original_path . $file_name);

                    $cari = DB::table('carousel')
                              ->where('id',$id)
                              ->first();

                    if ($cari == null) {
                        $save = DB::table('carousel')
                                  ->insert([
                                    'id'            => $id,
                                    'url'           => 'storage/carousel/'.$file_name,
                                    'created_at'    => carbon::now(),
                                    'updated_at'    => carbon::now(),
                                  ]);
                    }else{
                        $save = DB::table('carousel')
                                  ->where('id',$id)
                                  ->update([
                                    'url'           => 'storage/carousel/'.$file_name,
                                    'created_at'    => carbon::now(),
                                    'updated_at'    => carbon::now(),
                                  ]);
                    }
                }
            }
        }

        DB::commit();
        return redirect()->back();
            
    }



    public function foto()
    {
    	return view('page.foto');
    }

    public function datatable_foto()
    {

        $data = DB::table('foto')->get();
        $data = collect($data);
        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                            $a = '<div class="btn-group">' ;
                            $b = '';
                            $c = '';
                            $c1 = '';
                            $d = '</div>';

                            $b = '<button type="button" onclick="edit(\''.$data->id.'\',\''.$data->url.'\')" class="btn btn-info btn-lg" title="ubah"><label class="fa fa-pencil-alt"></label></button>';


                            $c = '<button type="button" onclick="hapus(\''.$data->id.'\')" class="btn btn-danger btn-lg" title="hapus"><label class="fa fa-trash"></label></button>';

                            return $a.$b.$c1.$c.$d;
                        })->addColumn('image', function ($data) {
                            $thumb = url('/').'/'.$data->url;
                            return '<img style="width:150px;height:170px;border-radius:0" class="img-fluid img-thumbnail" src="'.$thumb.'">';
                        })
                        ->rawColumns(['aksi','image'])
                        ->addIndexColumn()
                        ->make(true);
    }

    public function save_foto(Request $req)
    {
        DB::beginTransaction();

        if (isset($req->foto)) {

            $file = $req->file('foto');

            if ($req->id == null) {
                $id = DB::table('foto')->max('id')+1;
            }else{
                $id = $req->id;
            }

            $file_name = 'foto_'. $id .'_' . '.' . $file->getClientOriginalExtension();

            if (!is_dir(storage_path('foto/'))) {
                mkdir(storage_path('foto/'), 0777, true);
            }

            $original_path = storage_path('foto/');

            Image::make($file)->save($original_path . $file_name);

            $cari = DB::table('foto')
                      ->where('id',$id)
                      ->first();

            if ($cari == null) {
                $save = DB::table('foto')
                          ->insert([
                            'id'            => $id,
                            'url'           => 'storage/foto/'.$file_name,
                            'created_at'    => carbon::now(),
                            'updated_at'    => carbon::now(),
                          ]);
            }else{
                $save = DB::table('foto')
                          ->where('id',$id)
                          ->update([
                            'url'           => 'storage/foto/'.$file_name,
                            'created_at'    => carbon::now(),
                            'updated_at'    => carbon::now(),
                          ]);
            }
        }

        DB::commit();
        return redirect()->back();
    }

    public function delete_foto(Request $req)
    {   
        $data = DB::table('foto')->where('id',$req->id)->first();

        unlink($data->url);
        $delete = DB::table('foto')->where('id',$req->id)->delete();
        return redirect()->back();
    }

    public function video()
    {
    	return view('page.video');
    }

    public function datatable_video()
    {

        $data = DB::table('video')->get();
        $data = collect($data);
        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                            $a = '<div class="btn-group">' ;
                            $b = '';
                            $c = '';
                            $c1 = '';
                            $d = '</div>';

                            $b = '<button type="button" onclick="edit(\''.$data->id.'\',\''.$data->url.'\')" class="btn btn-info btn-lg" title="ubah"><label class="fa fa-pencil-alt"></label></button>';


                            $c = '<button type="button" onclick="hapus(\''.$data->id.'\')" class="btn btn-danger btn-lg" title="hapus"><label class="fa fa-trash"></label></button>';

                            return $a.$b.$c1.$c.$d;
                        })->addColumn('image', function ($data) {
                            $thumb = url('/').'/'.$data->url;
                            return '<button type="button" onclick="preview(\''.$data->url.'\')" class="btn btn-info btn-lg" title="hapus"><label class="fa fa-play"></label></button>';
                            
                        })
                        ->rawColumns(['aksi','image'])
                        ->addIndexColumn()
                        ->make(true);
    }

    public function save_video(Request $req)
    {
        DB::beginTransaction();
        if (isset($req->video)) {
            $file = $req->file('video');

            if ($req->id == null) {
                $id = DB::table('video')->max('id')+1;
            }else{
                $id = $req->id;
            }

            $file_name = 'video_'. $id .'_' . '.' . $file->getClientOriginalExtension();

            if (!is_dir(storage_path('video/'))) {
                mkdir(storage_path('video/'), 0777, true);
            }

            $original_path = storage_path('video/');


            // Storage::putFile('avatars', $req->file('video'));
            $file->move($original_path, $file_name);

            $cari = DB::table('video')
                      ->where('id',$id)
                      ->first();

            if ($cari == null) {
                $save = DB::table('video')
                          ->insert([
                            'id'            => $id,
                            'url'           => 'storage/video/'.$file_name,
                            'created_at'    => carbon::now(),
                            'updated_at'    => carbon::now(),
                          ]);
            }else{
                $save = DB::table('video')
                          ->where('id',$id)
                          ->update([
                            'url'           => 'storage/video/'.$file_name,
                            'created_at'    => carbon::now(),
                            'updated_at'    => carbon::now(),
                          ]);
            }
        }

        DB::commit();
        return redirect()->back();
    }

    public function delete_video(Request $req)
    {   
        $data = DB::table('video')->where('id',$req->id)->first();

        unlink($data->url);
        $delete = DB::table('video')->where('id',$req->id)->delete();
        return redirect()->back();
    }

    public function berita()
    {
        return view('page.berita');
    }

    public function save_berita(Request $req)
    {
        DB::beginTransaction();
       
        if ($req->id == null) {
            $id = DB::table('berita')->max('id')+1;
        }else{
            $id = $req->id;
        }
        if (isset($req->foto)) {
            $file = $req->file('foto');
            $file_name = 'cover_'. $id .'_' . '.' . $file->getClientOriginalExtension();

            if (!is_dir(storage_path('cover/'))) {
                mkdir(storage_path('cover/'), 0777, true);
            }

            $original_path = storage_path('cover/');

            Image::make($file)->save($original_path . $file_name);
        }else{
            $file_name = DB::table('berita')
                  ->where('id',$id)
                  ->first()->url;

            $file_name = str_replace('storage/cover/', '', $file_name);
        }

        $cari = DB::table('berita')
                  ->where('id',$id)
                  ->first();

        if ($cari == null) {
            $save = DB::table('berita')
                      ->insert([
                        'id'            => $id,
                        'body'          => $req->body,
                        'judul'          => $req->judul,
                        'url'           => 'storage/cover/'.$file_name,
                        'created_at'    => carbon::now(),
                        'created_by'    => Auth::user()->id,
                        'updated_at'    => carbon::now(),
                      ]);
        }else{
            $save = DB::table('berita')
                      ->where('id',$id)
                      ->update([
                        'body'          => $req->body,
                        'judul'          => $req->judul,
                        'url'           => 'storage/cover/'.$file_name,
                        'created_at'    => carbon::now(),
                        'updated_at'    => carbon::now(),
                      ]);
        }

        DB::commit();
        return redirect()->back();
    }

    public function datatable_berita()
    {

        $data = DB::table('berita')->get();
        $data = collect($data);
        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                            $a = '<div class="btn-group">' ;
                            $b = '';
                            $c = '';
                            $c1 = '';
                            $d = '</div>';

                            $b = '<button type="button" onclick="edit(\''.$data->id.'\',\''.$data->url.'\',\''.$data->judul.'\')" class="btn btn-info btn-lg" title="ubah"><label class="fa fa-pencil-alt"></label></button>';


                            $c = '<button type="button" onclick="hapus(\''.$data->id.'\')" class="btn btn-danger btn-lg" title="hapus"><label class="fa fa-trash"></label></button>';

                            return $a.$b.$c1.$c.$d;
                        })->addColumn('image', function ($data) {
                            $thumb = url('/').'/'.$data->url;
                            return '<img style="width:150px;height:170px;border-radius:0" class="img-fluid img-thumbnail" src="'.$thumb.'">'.'<div hidden class="body_'.$data->id.'">'.$data->body.'</div>';
                        })->addColumn('urls', function ($data) {
                            $thumb = url('/berita_desa').'?id='.$data->id;
                            return '<a href="'.$thumb.'">'.$thumb.'</a>';
                        })
                        ->rawColumns(['aksi','image','urls'])
                        ->addIndexColumn()
                        ->make(true);
    }

    public function edit_berita(Request $req)
    {
        $data = DB::table('berita')->where('id',$req->id)->first();

        return Response::json(['data'=>$data]);
    }

    public function delete_berita(Request $req)
    {   
        $data = DB::table('berita')->where('id',$req->id)->first();

        unlink($data->url);
        $delete = DB::table('berita')->where('id',$req->id)->delete();
        return redirect()->back();
    }

    public function pengumuman()
    {
        return view('page.pengumuman_admin');
    }

    public function perangkat_desa()
    {
        return view('page.perangkat_desa');
    }

    public function datatable_perangkat_desa()
    {

        $data = DB::table('perangkat_desa')->get();
        $data = collect($data);
        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                            $a = '<div class="btn-group">' ;
                            $b = '';
                            $c = '';
                            $c1 = '';
                            $d = '</div>';

                            $b = '<button type="button" onclick="edit(\''.$data->id.'\',\''.$data->url.'\',\''.$data->nama.'\',\''.$data->jabatan.'\',\''.$data->keterangan.'\')" class="btn btn-info btn-lg" title="ubah"><label class="fa fa-pencil-alt"></label></button>';


                            $c = '<button type="button" onclick="hapus(\''.$data->id.'\')" class="btn btn-danger btn-lg" title="hapus"><label class="fa fa-trash"></label></button>';

                            return $a.$b.$c1.$c.$d;
                        })->addColumn('image', function ($data) {
                            $thumb = url('/').'/'.$data->url;
                            return '<img style="width:150px;height:170px;border-radius:0" class="img-fluid img-thumbnail" src="'.$thumb.'">';
                        })->addColumn('identitas', function ($data) {
                            return '<table class="table table-hover">'.
                                        '<tr>'.
                                            '<td width="100px">Nama</td>'.
                                            '<td> : '.$data->nama.'<input type="hidden" class="id" name="id" value='.$data->id.'></td>'.
                                        '</tr>'.
                                        '<tr>'.
                                            '<td width="100px">Jabatan</td>'.
                                            '<td> : '.$data->jabatan.'</td>'.
                                        '</tr>'.
                                        '<tr>'.
                                            '<td width="100px">Lain - Lain</td>'.
                                            '<td> : '.$data->keterangan.'</td>'.
                                        '</tr>'.
                                    '</table>';
                        })
                        ->rawColumns(['aksi','image','identitas'])
                        ->addIndexColumn()
                        ->make(true);
    }

    public function save_perangkat_desa(Request $req)
    {
        DB::beginTransaction();


        if ($req->id == null) {
            $id = DB::table('perangkat_desa')->max('id')+1;
        }else{
            $id = $req->id;
        }
        if (isset($req->foto)) {

            $file = $req->file('foto');

            $file_name = 'perangkat_desa_'. $id .'_' . '.' . $file->getClientOriginalExtension();

            if (!is_dir(storage_path('perangkat_desa/'))) {
                mkdir(storage_path('perangkat_desa/'), 0777, true);
            }

            $original_path = storage_path('perangkat_desa/');

            Image::make($file)->save($original_path . $file_name);

        }else{
            $file_name = DB::table('perangkat_desa')->where('id',$req->id)->first()->url;

            $file_name = str_replace('storage/perangkat_desa/', '', $file_name);
        }

        $cari = DB::table('perangkat_desa')
                  ->where('id',$id)
                  ->first();

        if ($cari == null) {
            $save = DB::table('perangkat_desa')
                      ->insert([
                        'id'            => $id,
                        'nama'          => $req->nama,
                        'jabatan'       => $req->jabatan,
                        'keterangan'    => $req->keterangan,
                        'url'           => 'storage/perangkat_desa/'.$file_name,
                        'created_at'    => carbon::now(),
                        'updated_at'    => carbon::now(),
                      ]);
        }else{
            $save = DB::table('perangkat_desa')
                      ->where('id',$id)
                      ->update([
                        'nama'          => $req->nama,
                        'jabatan'       => $req->jabatan,
                        'keterangan'    => $req->keterangan,
                        'url'           => 'storage/perangkat_desa/'.$file_name,
                        'updated_at'    => carbon::now(),
                      ]);
        }

        DB::commit();
        return redirect()->back();
    }

    public function delete_perangkat_desa(Request $req)
    {   
        $data = DB::table('perangkat_desa')->where('id',$req->id)->first();

        unlink($data->url);
        $delete = DB::table('perangkat_desa')->where('id',$req->id)->delete();
        return redirect()->back();
    }

    public function admin_profil_desa()
    {
        $desa = DB::table('profil_desa')->first();
        return view('page.admin_profil_desa',compact('desa'));
    }

    public function save_profil_desa(Request $req)
    {
        DB::beginTransaction();
       
        if ($req->id == null) {
            $id = DB::table('profil_desa')->max('id')+1;
        }else{
            $id = $req->id;
        }

        $cari = DB::table('profil_desa')
                  ->where('id',$id)
                  ->first();

        if ($cari == null) {
            $save = DB::table('profil_desa')
                      ->insert([
                        'id'            => $id,
                        'body'          => $req->body,
                        'created_at'    => carbon::now(),
                        'created_by'    => Auth::user()->id,
                        'updated_at'    => carbon::now(),
                      ]);
        }else{
            $save = DB::table('profil_desa')
                      ->where('id',$id)
                      ->update([
                        'body'          => $req->body,
                        'created_at'    => carbon::now(),
                        'updated_at'    => carbon::now(),
                      ]);
        }

        DB::commit();
        return redirect()->back();
    }

    public function admin_wilayah()
    {
        $wilayah = DB::table('wilayah')->first();
        return view('page.admin_wilayah',compact('wilayah'));
    }

    public function save_wilayah(Request $req)
    {
        DB::beginTransaction();
       
        if ($req->id == null) {
            $id = DB::table('wilayah')->max('id')+1;
        }else{
            $id = $req->id;
        }

        $cari = DB::table('wilayah')
                  ->where('id',$id)
                  ->first();

        if ($cari == null) {
            $save = DB::table('wilayah')
                      ->insert([
                        'id'            => $id,
                        'body'          => $req->body,
                        'created_at'    => carbon::now(),
                        'created_by'    => Auth::user()->id,
                        'updated_at'    => carbon::now(),
                      ]);
        }else{
            $save = DB::table('wilayah')
                      ->where('id',$id)
                      ->update([
                        'body'          => $req->body,
                        'created_at'    => carbon::now(),
                        'updated_at'    => carbon::now(),
                      ]);
        }

        DB::commit();
        return redirect()->back();
    }

    public function admin_pemerintahan()
    {
        $pemerintahan = DB::table('pemerintah')->first();
        return view('page.admin_pemerintahan',compact('pemerintahan'));
    }

    public function save_pemerintahan(Request $req)
    {
        DB::beginTransaction();
       
        if ($req->id == null) {
            $id = DB::table('pemerintah')->max('id')+1;
        }else{
            $id = $req->id;
        }

        $cari = DB::table('pemerintah')
                  ->where('id',$id)
                  ->first();

        if ($cari == null) {
            $save = DB::table('pemerintah')
                      ->insert([
                        'id'            => $id,
                        'body'          => $req->body,
                        'created_at'    => carbon::now(),
                        'created_by'    => Auth::user()->id,
                        'updated_at'    => carbon::now(),
                      ]);
        }else{
            $save = DB::table('pemerintah')
                      ->where('id',$id)
                      ->update([
                        'body'          => $req->body,
                        'created_at'    => carbon::now(),
                        'updated_at'    => carbon::now(),
                      ]);
        }

        DB::commit();
        return redirect()->back();
    }

    public function potensi()
    {
        return view('page.potensi');
    }

    public function save_potensi(Request $req)
    {
        DB::beginTransaction();
       
        if ($req->id == null) {
            $id = DB::table('potensi')->max('id')+1;
        }else{
            $id = $req->id;
        }
        if (isset($req->foto)) {
            $file = $req->file('foto');
            $file_name = 'cover_'. $id .'_' . '.' . $file->getClientOriginalExtension();

            if (!is_dir(storage_path('cover/'))) {
                mkdir(storage_path('cover/'), 0777, true);
            }

            $original_path = storage_path('cover/');

            Image::make($file)->save($original_path . $file_name);
        }else{
            $file_name = DB::table('potensi')
                  ->where('id',$id)
                  ->first()->url;

            $file_name = str_replace('storage/cover/', '', $file_name);
        }

        $cari = DB::table('potensi')
                  ->where('id',$id)
                  ->first();

        if ($cari == null) {
            $save = DB::table('potensi')
                      ->insert([
                        'id'            => $id,
                        'body'          => $req->body,
                        'judul'          => $req->judul,
                        'jenis'          => $req->jenis,
                        'url'           => 'storage/cover/'.$file_name,
                        'created_at'    => carbon::now(),
                        'created_by'    => Auth::user()->id,
                        'updated_at'    => carbon::now(),
                      ]);
        }else{
            $save = DB::table('potensi')
                      ->where('id',$id)
                      ->update([
                        'body'          => $req->body,
                        'judul'          => $req->judul,
                        'jenis'          => $req->jenis,
                        'url'           => 'storage/cover/'.$file_name,
                        'created_at'    => carbon::now(),
                        'updated_at'    => carbon::now(),
                      ]);
        }

        DB::commit();
        return redirect()->back();
    }

    public function datatable_potensi()
    {

        $data = DB::table('potensi')->get();
        $data = collect($data);
        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                            $a = '<div class="btn-group">' ;
                            $b = '';
                            $c = '';
                            $c1 = '';
                            $d = '</div>';

                            $b = '<button type="button" onclick="edit(\''.$data->id.'\',\''.$data->url.'\',\''.$data->judul.'\')" class="btn btn-info btn-lg" title="ubah"><label class="fa fa-pencil-alt"></label></button>';


                            $c = '<button type="button" onclick="hapus(\''.$data->id.'\')" class="btn btn-danger btn-lg" title="hapus"><label class="fa fa-trash"></label></button>';

                            return $a.$b.$c1.$c.$d;
                        })->addColumn('image', function ($data) {
                            $thumb = url('/').'/'.$data->url;
                            return '<img style="width:150px;height:170px;border-radius:0" class="img-fluid img-thumbnail" src="'.$thumb.'">'.'<div hidden class="body_'.$data->id.'">'.$data->body.'</div>';
                        })->addColumn('urls', function ($data) {
                            if ($data->jenis == 'potensi_desa') {
                                $thumb = url('/potensi_desa').'?id='.$data->id;
                            }else{
                                $thumb = url('/potensi_desa').'?id='.$data->id;
                            }
                            return '<a href="'.$thumb.'">'.$thumb.'</a>';
                        })
                        ->rawColumns(['aksi','image','urls'])
                        ->addIndexColumn()
                        ->make(true);
    }

    public function edit_potensi(Request $req)
    {
        $data = DB::table('potensi')->where('id',$req->id)->first();

        return Response::json(['data'=>$data]);
    }

    public function delete_potensi(Request $req)
    {   
        $data = DB::table('potensi')->where('id',$req->id)->first();

        unlink($data->url);
        $delete = DB::table('potensi')->where('id',$req->id)->delete();
        return redirect()->back();
    }
}
