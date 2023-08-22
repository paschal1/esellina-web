<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order_item extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $fillable = [
         'user_id', 
        'order_id',
        'post_id', 
        'qty',
        'price',
       
    ];
/** 
 * Get the products 
 * 
 *  @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */      
 public function products(): BelongsTo
{
  return $this->belongsTo(Post::class, 'post_id', 'id');
}
}
