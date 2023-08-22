<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
     protected $table = 'posts';
    protected $fillable = [
        'user_id',
        'cate_id',
        'shop_id',
        'name',
        'slug',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_descrip',
        'meta_keywords',
        'latitude',
        'longitude',
    ];

//  public function scopeNearbyPosts($query, $latitude, $longitude, $radius)
//     {
//         return $query->selectRaw("
//             id,
//             name,
//             slug,
//             selling_price,
//             image,
//             wish_status,
//             (6371 * acos(cos(radians($latitude)) * cos(radians(latitude)) * cos(radians(longitude) - radians($longitude)) + sin(radians($latitude)) * sin(radians(latitude)))) AS distance
//         ")
//         ->having('distance', '<', $radius)
//         ->orderBy('distance', 'asc');


//     }

//table relationship logic
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

public function category()
{
  return $this->belongsTo(Category::class, 'cate_id', 'id');
}

    public function user()
{
  return $this->belongsTo(User::class, 'user_id', 'id');
}

    public function shop()
{
  return $this->belongsTo(Shop::class, 'shop_id', 'id');
}



}
