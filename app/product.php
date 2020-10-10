<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'cat_id',
        'subcat_id',
        'title',
        'details',
        'previous_price',
        'offer_price',
        'image',
        'status',
        'hscode',
    ];


    public function product(){
        return $this->belongsTo(subcategories::class,'subcat_id');
    }
    public static function allproduct(){
        $pro=product::orderBy('title','DESC')->get();
        return $pro;
    }
}
