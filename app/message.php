<?php

namespace App;

use App\userchat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class message extends Model
{
    protected $fillable = [
        'chat_id',
        'user_id',
        'token_id',
        'user_name',
        'message',
        'image',
    ];
    public function userchat(){
        return $this->belongsTo(userchat::class);
    }

    public static function showchat(){
        $id=Auth::user()->id;
        $showchat=message::whereBetween('user_id',[1,2])->get();//user id from auth, id 2 is admin's id.
        return $showchat;
    }
    public static function messagehas(){
        $hm=message::get();
        return $hm;
    }
    public static function chat(){
        //$id=Auth::user()->id;
        $jj=userchat::get();
        return $jj;
    }
    public static function chatt($id){
        $jj=userchat::where('id',$id)->get();
        return $jj;
    }
}
