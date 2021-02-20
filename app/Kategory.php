<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
  protected $table = 'kategory';
  protected $fillable = ['id','nama'];
}
