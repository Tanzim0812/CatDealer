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

    public static function chatproduct(){
        $id=Auth::user()->id;
        $showchat=userchat::orderBy('created_at','DESC')->get();
        return $showchat;
    }

    public static function chatmsgg(){
        $id=Auth::user()->id;
        $showchat=userchat::orderBy('id','DESC')->limit(4)->get();
        return $showchat;
    }
    public static function messagehas(){
        $hm=message::orderBy('chat_id','DESC')->limit(4)->get();
        return $hm;
    }
    public static function customizechatproduct(){
        //$id=Auth::user()->id;
        $jj=userchat::where('customize',1)->get();
        return $jj;
    }

}
