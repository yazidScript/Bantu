<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
  use Sluggable;
  protected $dates = ['created_at'];
  protected $table = 'posts';
  protected $fillable = ['id','user_id','title','content','slug','thumbnail','kecamatan','kategori','created_at'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function donatur()
  {
    return $this->belongsTo(Donatur::class);
  }

  public function thumbnail()
  {
    if (!$this->thumbnail) {
       return asset('no-image.png');
    }
    return $this->thumbnail;
  }
}
