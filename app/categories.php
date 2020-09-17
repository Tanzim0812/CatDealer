<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function subcat(){
        return $this->belongsTo(subcategories::class);
    }
}
