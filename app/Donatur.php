<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
  protected $table = 'donatur';
  protected $fillable = ['id','post_id','nominal','email','notlp','nama','metodebayar','status','gambar_ktp','created_at'];

  public function donasi()
  {
    return $this->hasMany(Donasi::class);
  }
  public function donatur()
  {
    return $this->belongsTo(Donatur::class);
  }
  public function posts()
  {
    return $this->hasMany(Post::class);
  }
}
