<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
  protected $table = 'pengajuan';
  protected $fillable = ['id','email','namalengkap','notlp','tanggal','alamat','gambar_ktp','created_at','updated_at'];
}
