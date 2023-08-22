<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $fillable = [

        'user_id',
        'post_id',
        'review',
        'rating',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

     public function post(){
        return $this->belongsTo(Post::class, 'post_id','id');
    }
}
