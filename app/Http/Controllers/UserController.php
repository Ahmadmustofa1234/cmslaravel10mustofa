<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PostBerita as postberita;
use Illuminate\Support\Str;
class UserController extends Controller
{
    

    public function index(){

        return view('user.index');
    }
    public function post(){
        $data=postberita::all();
        return view('user.berita',['data'=>$data]);
    }
    public function edit($id)
    {
        $data = postBerita::findOrFail($id);
        return view('user.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = postBerita::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('post')->with('success', 'Data berhasil diperbarui.');
    }
    public function hapus($id)
    {
        // Temukan data berdasarkan ID
        $data = postBerita::findOrFail($id);

        // Lakukan penghapusan
        $data->delete();

       
        return redirect()->route('post')->with('success', 'Data berhasil dihapus.');
    }
    public function tambahBerita(Request $request)
    {
        $str = Str::random(100);

    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'featured_image' => 'required|image|max:2048', 
    ], [
        'title.required' => 'Judul wajib diisi',
        'content.required' => 'Isi wajib diisi',
        'featured_image.required' => 'Gambar wajib diisi',
        'featured_image.image' => 'Gambar harus berupa file gambar',
        'featured_image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
    ]);

    $imageFile = $request->file('featured_image');
    $imageExtension = $imageFile->getClientOriginalExtension();
    $imageName = date('ymdhis') . "." . $imageExtension;
    $imageFile->move(public_path('picture/berita'), $imageName);

    $infoBerita = [
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $imageName,
    ];
    postBerita::create($infoBerita);
       
        return redirect()->route('post')->with('success', 'Berita berhasil ditambahkan.');
        
    }
    
}
