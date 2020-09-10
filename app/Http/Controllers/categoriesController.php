<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;
use Session;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show=categories::orderBy('id','ASC')->get();
        return view('admin.managecategories',compact('show'));
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
        $request->validate([
            'category_name'=>'required|unique:categories,category_name'
        ]);
        $save=new categories();
        $save->category_name=$request->category_name;
        $save->category_slug=$this->slug_generator($request->category_name);
        $save->save();
        Session::flash('save','Save Successfully');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shw=categories::find($id);
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
    public function update(Request $request)
    {
        $request->validate([
            'category_name'=>'required|unique:categories,category_name'
        ]);
        $update = categories::find($request->id);
        $update->category_name = $request->category_name;
        $update->category_slug = $this->slug_generator($request->category_name);
        $update->save();
        Session::flash('update','Update Successfully');
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
        $delete= categories::find($id);
        $delete->delete();
        Session::flash('delete','Successfully Deleted!!');
        return back();
    }
    public function slug_generator($string){
        $string= str_replace(' ','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
}
