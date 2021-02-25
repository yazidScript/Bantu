<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategory;
use App\Kecamatan;
use App\Post;
use App\User;
use DB,Hash;
use update;
class PostController extends Controller
{

   public function index(Request $request)
   {
     if ($request->has('cari')) {
         $posts = Post::where('title','LIKE','%' .$request->cari. '%')->get();
     }else {
       $posts = Post::all();
       $users = User::all();
     }

      return view ('Admin.Post.index',compact('posts'));
   }
   public function singlepost($slug)
   {
     $post = Post::where('slug' , '=' , $slug)->first();
     return view('Admin.Post.show',compact(['post']));
   }

   public function create()
   {

     $kategori = Kategory::all();
     $kecamatan = Kecamatan::all();
     return view('Admin.Post.create',['kecamatan' => $kecamatan,'kategori'=> $kategori]);
   }

   public function store(Request $request)
   {
     $filename = time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
     $request->file('thumbnail')->move('images', $filename);
     $post = Post::create([
       'user_id' => '1',
       'jumlah_sekarang' => 0,
       'penerima' => $request->penerima,
       'title' =>$request->title,
       'kecamatan' => $request->option,
       'kategori'  => $request->optionkat,
       'content' => $request->content,
       'thumbnail' => $filename
     ]);
    return redirect('/post')->with('sukses','Data Post Berhasil Dibuat');
   }
   public function edit($slug)
   {
     $post = DB::table('posts')->where('slug',$slug)->get();
     $kecamatan = Kecamatan::all();
     $kategori = Kategory::all();
     return view('Admin.Post.edit',['post' => $post,'kecamatan'=> $kecamatan,'kategori' => $kategori]);
   }
   public function update(Request $request,$id)
   {
    $post = Post::find($id);
    $post->update($request->all());
     if ($request->hasFile('thumbnail')) {
        $request->file('thumbnail')->move('images/',$request->file('thumbnail')->getClientOriginalExtension());
        $post->thumbnail = $request->file('thumbnail')->getClientOriginalName();
        $post->save();
     }
     return redirect('/post')->with('sukses','sukses data berhasil di update');
   }
   public function delete($slug)
   {
     Post::where('slug',$slug)->delete();
     return redirect('/post')->with('sukses','Data Post Berhasil Dihapus');
   }
   // public function srcThumbnail($imagename){
   //      $path = storage_path('product_images/'.$imagename);
   //      if(!File::exists($path)) abort(404);
   //      $file = File::get($path);
   //      $type = File::mimeType($path);
   //      $response = Response::make($file,200);
   //      $response->header("Content-Type",$type);
   //      return $response;
   //    }
}
