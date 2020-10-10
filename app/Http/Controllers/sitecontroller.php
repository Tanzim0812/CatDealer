<?php

namespace App\Http\Controllers;

use App\message;
use App\product;
use App\User;
use App\userchat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
class sitecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $userpr_ids=userchat::where('user_id','=',$id)->get()->pluck('pro_id')->toArray();
        //$chat = DB::select( DB::raw("SELECT * FROM userchats WHERE user_id='$id'"));
        $chat = userchat::where('user_id',$id)->first();
        $chatt = DB::select( DB::raw("SELECT id,pro_id,user_id FROM userchats WHERE user_id='$id'"));
        $country = DB::select( DB::raw("SELECT * FROM country ORDER BY name ASC"));

        return view('website.userdashboard',compact('chat','chatt','userpr_ids','country'));
    }
    public function userpro()
    {
        $id=Auth::user()->id;
        $chat = DB::select( DB::raw("SELECT * FROM userchats WHERE user_id='$id'"));
        $chatt = DB::select( DB::raw("SELECT id FROM userchats WHERE user_id='$id'"));

        return view('website.userprofile',compact('chat','chatt'));
    }
    public function usermsg()
    {
        $id=Auth::user()->id;
        $chat = DB::select( DB::raw("SELECT * FROM userchats WHERE user_id='$id'"));
        $chatt = DB::select( DB::raw("SELECT id FROM userchats WHERE user_id='$id'"));

        return view('website.usermessage',compact('chat','chatt'));
    }
    public function seen_status($id,$seen_status){
        $user=message::find($id);
        $user->seen=$seen_status;
        $user->save();
        return response()->json(['message'=>'success']);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function search(Request $request){

        if($request->ajax()) {

            $data = product::where('title', 'LIKE', $request->pro_name.'%')
                ->get();
            return response()->json(['data'=>$data],200);


        }
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
    public function update(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'phone'=>'required',
            'location_add'=>'required',
            'country'=>'required'

        ]);
        $update = User::find($request->id);
        $update->name = $request->name;
        $update->phone = $request->phone;
        $update->country = $request->country;
        $update->location_add = $request->location_add;

        $update->save();
        Session::flash('update','Successfully update');
        return back();
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
