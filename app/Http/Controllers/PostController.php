<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategory;
use App\Kecamatan;
use App\Post;
use App\User;
use DB,Hash;
use update;
use Session;
class PostController extends Controller
{

  public function check_logged(){
    if(!Session::has('admin')){
      return true;
    }
  }

   public function index(Request $request)
   {
     if(Self::check_logged()){
       return redirect()->back();
     }

     $posts = Post::latest()->get();
     $users = User::latest()->get();

     // $jml_donate = DB::table('posts')->get();

      return view ('Admin.Post.index',compact('posts'));
   }
   public function show($slug)
   {
     if(Self::check_logged()){
       return redirect()->back();
     }

     $post = Post::where('slug' , '=' , $slug)->first();
     return view('Admin.Post.show',compact(['post']));
   }

   public function create()
   {
     if(Self::check_logged()){
       return redirect()->back();
     }

     $kategori = Kategory::all();
     $kecamatan = Kecamatan::all();
     return view('Admin.Post.create',['kecamatan' => $kecamatan,'kategori'=> $kategori]);
   }

   public function store(Request $request)
   {
     if(Self::check_logged()){
       return redirect()->back();
     }

     $request->validate([
       'title' => 'required',
       'penerima' => 'required',
       'content' => 'required',
       'thumbnail' => 'required'
    ]);


     $filename = time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
     $request->file('thumbnail')->move('images', $filename);
     $post = Post::create([
       'user_id' => '1',
       'jumlah_sekarang' => 0,
       'total_donatur' => 0,
       'penerima' => $request->penerima,
       'slug' => $request->slug,
       'title' =>$request->title,
       'kecamatan' => $request->option,
       'kategori'  => $request->optionkat,
       'content' => $request->content,
       'thumbnail' => $filename
     ]);
    return redirect('/dashboard/post')->with('sukses','Data Post Berhasil Dibuat');
   }
   public function edit($slug)
   {
     if(Self::check_logged()){
       return redirect()->back();
     }

     $post = DB::table('posts')->where('slug',$slug)->get();
     $kecamatan = Kecamatan::all();
     $kategori = Kategory::all();
     return view('Admin.Post.edit',['post' => $post,'kecamatan'=> $kecamatan,'kategori' => $kategori]);
   }
   public function update(Request $request,$id)
   {
     if(Self::check_logged()){
       return redirect()->back();
     }

      $request->validate([
        'title' => 'required',
        'penerima' => 'required',
        'content' => 'required'
     ]);

      $new_image = $request->new_image;
      $old_image = $request->old_image;
      if(!isset($new_image)){
        DB::table('posts')->where('id',$id)->update([
          'title' => $request->title,
          'slug' => $request->slug,
          'penerima' => $request->penerima,
          'kecamatan' => $request->option,
          'kategori'  => $request->optionkat,
          'content' => $request->content,
          'thumbnail' =>$old_image
            ]);
      }else{
        $filename = time() . '.' . $request->file('new_image')->getClientOriginalExtension();
        $request->file('new_image')->move('images/', $filename);
        DB::table('posts')->where('id',$id)->update([
          'title' => $request->title,
          'slug' => $request->slug,
          'penerima' => $request->penerima,
          'kecamatan' => $request->option,
          'kategori'  => $request->optionkat,
          'content' => $request->content,
          'thumbnail' => $filename
            ]);
      }
     return redirect('/dashboard/post')->with('sukses','sukses data berhasil di update');
   }
   public function delete($slug)
   {
     if(Self::check_logged()){
       return redirect()->back();
     }

     Post::where('slug',$slug)->delete();
     return redirect('/dashboard/post')->with('sukses','Data Post Berhasil Dihapus');
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
