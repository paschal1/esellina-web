<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = "shops";
    protected $fillable = [
        'user_id',
        'shop_name',
        'shop_address',
        'shop_email',
        'shop_phone',
        'description',
        'website',
        'image',
    ];

   

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
