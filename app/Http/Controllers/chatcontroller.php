<?php

namespace App\Http\Controllers;

use App\message;
use App\userchat;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;


class chatcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        //$showchat=message::where('chat_id',$id)->get();//user id from auth, id 2 is admin's id.
        $chatid=userchat::orderBy('id','DESC')->LIMIT(1)->get();
        //$showchat = DB::select( DB::raw("SELECT * FROM messages WHERE user_id='$id'"));


       //return view('website.userchat',compact('chatid'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $send=new message();
        $send->user_id=$request->user_id;
        $send->user_name=$request->user_name;
        $send->chat_id=$request->chat_id;
        $send->pro_name=$request->pro_name;
        $send->target_price=$request->target_price;
        $send->qty=$request->qty;
        $send->message=$request->message;

        if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.'. $extension;
            $file->move('files/uploads/chat/',$filename);
            $send->image = $filename;
        }
        $send->save();
        Session::flash('msgsend','Message Has Been Sent');
        return back();
    }
    public function storeadmin(Request $request)
    {
        $send=new message();
        $send->user_id=$request->user_id;
        $send->user_name=$request->user_name;
        $send->chat_id=$request->chat_id;
        $send->message=$request->message;

        if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.'. $extension;
            $file->move('files/uploads/chat/',$filename);
            $send->image = $filename;

        }
        $send->save();
        Session::flash('msgsend','Message Has Been Sent');
        return back();
    }
    public function chatstart(Request $request)
    {
        $start=new userchat();
        $start->pro_id=$request->pro_id;
        $start->user_id=$request->user_id;


        $start->save();
        return back();
    }
    public function customchatstart(Request $request)
    {
        $start=new userchat();

        $start->user_id=$request->user_id;
        $start->customize=1;


        $start->save();
        return redirect()->to('/usermessage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$id=base64_decode($id);
        $show=userchat::with('product')->find(base64_decode($id));
        $indxx=message::where('chat_id',base64_decode($id))->get();
        return view('admin.adminchat',compact('show','indxx'));
    }

    public function customshow($id)
    {
        //$id=base64_decode($id);
        $show=userchat::with('product')->find(base64_decode($id));
        $indxx=message::where('chat_id',base64_decode($id))->get();
        return view('admin.customadminchat',compact('show','indxx'));
    }

    public function reply($id)
    {
        //$id=base64_decode($id);
        $show=userchat::with('product')->find(base64_decode($id));
        $indxx=message::where('chat_id',base64_decode($id))->get();
        return view('admin.adminreply',compact('show','indxx'));
    }
    public function customreply($id)
    {
        //$id=base64_decode($id);
        $show=userchat::with('product')->find(base64_decode($id));
        $indxx=message::where('chat_id',base64_decode($id))->get();
        return view('admin.customadminreply',compact('show','indxx'));
    }
    public function userchatshow($id)
    {
        //$id=base64_decode($id);
        $show=userchat::find(base64_decode($id));
        $indxx=message::where('chat_id',base64_decode($id))->get();
        return view('website.userchatshow',compact('show','indxx'));
    }
    public function showuser($id)
    {
        $show=userchat::find(base64_decode($id));
        $indxx=message::where('chat_id',base64_decode($id))->get();
        return view('website.userchat',compact('show','indxx'));
    }
    public function cusshowuser($id)
    {
        $show=userchat::find($id);
        $indxx=message::where('chat_id',$id)->get();
        return view('website.customuserchat',compact('show','indxx'));
    }

    public function userprofileshow($id)
    {
        $shw=\App\User::find($id);

        return response()->json(['data'=>$shw],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
