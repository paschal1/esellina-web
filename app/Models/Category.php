<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'user_id',
        'shop_id',
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image',
        'meta_title',
        'meta_descrip',
        'meta_keywords',
    ];

        public function user()
{
  return $this->belongsTo(User::class, 'user_id', 'id');
}

    public function shop()
{
  return $this->belongsTo(Shop::class, 'shop_id', 'id');
}

    public function post()
{
  return $this->hasMany(Post::class, 'cate_id', 'id');
}


}
