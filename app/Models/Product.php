<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primerykey = "id";
    function category(){
        return $this->hasone(Category::class, 'C_id');
    }
}
