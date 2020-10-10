<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function manageuser()
    {
        $user = \App\User::orderBy('name','ASC')->get();
        return view('admin.manageuser',compact('user'));
    }
    public function role_status($id,$role_status){
        $user=\App\User::find($id);
        $user->role=$role_status;
        $user->save();
        return response()->json(['message'=>'success']);
    }
    public function destroy($id)
    {
        $delete= \App\User::find($id);
        $delete->delete();
        Session::flash('delete','Successfully Deleted!!');
        return back();
    }

}
