<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'item',
        'quantity',
        'price',

    ];

    function orders(){
        return $this->hasone(Order::class, 'customer_id');
    }

    public function order()
{
    return $this->belongsTo(Order::class);
}
}
