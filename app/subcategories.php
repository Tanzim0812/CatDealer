<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    protected $fillable = [
        'cat_id',
        'subcat_name',
        'subcat_slug',
        'subcat_status',
    ];


    public function categories(){
        return $this->belongsTo(categories::class,'cat_id');
    }
}
