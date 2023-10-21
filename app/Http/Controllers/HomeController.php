<?php

namespace App\Http\Controllers;
use App\Models\PostBerita as postberita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data=postberita::all();
        $title = 'Halaman Home';
     
        return view('halaman_utama.index')->with(['judul' => $title, 'data' => $data]);

       
    }
    
}
