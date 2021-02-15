<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
  protected $table = 'donatur';
  protected $fillable = ['id','donasi_id','email','notlp','nama','metodebayar'];

  public function donasi()
  {
    return $this->hasMany(Donasi::class);
  }
  public function donatur()
  {
    return $this->belongsTo(Donatur::class);
  }
}
