<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodeBayar extends Model
{
  protected $table = 'metodebayar';
  protected $fillable = ['id','nama','nomor'];
}
