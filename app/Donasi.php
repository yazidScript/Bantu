<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
  protected $table = 'donasi';
  protected $fillable = ['id','judul','kecamatan','isi','gambar','created_at'];

  public function donatur()
  {
    return $this->belongsTo(Donatur::class);
  }
}
