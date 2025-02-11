<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
 
    protected $fillable = ['product_id','user_id'];
    
    public function products()
    {
        return $this->hasMany(Product::class,'id','product_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
