<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'sh_phone_number',
        'sh_city',
        'sh_postal_code',
        'product_id',
        'quantity',
        'total_price',
        'status'
    ];
}
