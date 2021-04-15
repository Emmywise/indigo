<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bracket extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'spend', '£0.00 - £1,999.99', '£2,000 - £4,999.99', '£5,000 - £24,999.99', '£25,000 and above',
    ];
    
    
    
    
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}