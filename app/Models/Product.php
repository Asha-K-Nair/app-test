<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'description' ,'price'
    ];

    public function stock()
    {
        return $this->hasOne(Stock::class,'id','product_id');
    }
}
