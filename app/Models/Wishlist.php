<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlists';
    protected $fillable = [
    'user_id',
    'pro_id',
    

    ];

        public function Products()
{
  return $this->belongsTo(Post::class, 'pro_id', 'id');
}

}
