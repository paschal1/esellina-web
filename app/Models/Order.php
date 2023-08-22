<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
      protected $table = 'orders';
    protected $fillable = [
       'user_id',
       'payment_id', 
      'fname',
        'lname', 
        'email',
        'phone',
        'street',
        'apartment',
        'city',
        'state',
        'country',
        'zip',
        'status',
        'note',
        'tracking_no',
        'total_price',
        'payment_mode',

    ];
    public function order_items()
{
  return $this->hasMany(Order_item::class);
}
}
