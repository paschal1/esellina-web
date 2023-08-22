<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $fillable = [

        'product_id',
        'qauntity_sold',
        'sales_amount'
    ];

    //table relationship logic
    public function post()
    {
        return $this->belongsTo(Post::class, 'product_id, id');
    }
}
