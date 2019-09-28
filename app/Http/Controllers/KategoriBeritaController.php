<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listKategoriBerita=KategoriBerita::all(); //select*from kategori_artikel

    //blade
    return view('kategori_berita.index', compact('listKategoriBerita'));
    //return view(view: 'kategori_berita.index')->with('data',$listKategoriBerita);
}

public function show($id) {
	//Eloquent
	//$KategoriArtikel=KategoriArtikel::('id','$id')->first(); // select * from Kategori artikel where id=$id limit 1
	$KategoriBerita=KategoriBerita::find($id);

	return view ( 'kategori_berita.show',compact( 'KategoriBerita'));
}

}