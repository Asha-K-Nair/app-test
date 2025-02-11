<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'user_id','description' ,'price'
    ];

    public function stock()
    {
        return $this->hasOne(Stock::class,'id','product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id','user_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class,'product_id','id');
    }
}
