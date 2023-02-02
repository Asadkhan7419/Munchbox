<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'amount_paid',
        'order_number',

    ];

    function detail(){
        return $this->hasone(Detail::class, 'customer_id');
    }

    public function details()
{
    return $this->hasMany(Detail::class);
}

}
