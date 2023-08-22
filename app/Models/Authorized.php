<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorized extends Model
{
    use HasFactory;
    protected $table = 'authorizeds';
    protected $fillable = [
        
        'user_id',
        'authorized',
        'post_id',
        'product_id',
        'cate_id',
        
    ];

      public function user()
{
  return $this->belongsTo(User::class, 'user_id', 'id');
}
}
