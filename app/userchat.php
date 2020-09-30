<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon;
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
    public function product(){
        return $this->belongsTo(product::class);
    }
    public static function userc8(){
        $s = userchat::first();
        return $s;
    }
    public static function usermsgs(){
        $id=Auth::user()->id;
        $r=userchat::where('user_id',$id)->get();
        return $r;
    }
    public static function usercustommsgs(){
        $id=Auth::user()->id;
        $r=userchat::where('user_id',$id)->where('customize',1)->get();
        return $r;
    }
    public static function chaths(){
        $c = userchat::get();
        return $c;
    }
    public static function chat24(){
        $c = userchat::where('created_at','>=',Carbon\Carbon::now()->subdays(1))->count();
        return $c;
    }
    public static function chat7days(){
        $c = userchat::where('created_at','>=',Carbon\Carbon::now()->subdays(7))->count();
        return $c;
    }
    public static function chat30days(){
        $c = userchat::where('created_at','>=',Carbon\Carbon::now()->subdays(30))->count();
        return $c;
    }
    public static function chat60days(){
        $c = userchat::where('created_at','>=',Carbon\Carbon::now()->subdays(60))->count();
        return $c;
    }
}
