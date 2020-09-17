<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class userchat extends Model
{
    protected $fillable = [
        'user_id',
        'admin_id',
        'token',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
