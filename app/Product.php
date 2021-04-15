<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'product', 'price', 'brand', 'description', 'image'
    ];
    
    public function Bracket(){
        return $this->hasMany(Bracket::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}