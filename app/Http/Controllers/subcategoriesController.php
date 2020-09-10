<?php

namespace App\Http\Controllers;

use App\categories;
use App\subcategories;
use Illuminate\Http\Request;
use Session;

class subcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show=subcategories::with('categories')->get();
        $show0=categories::get();
        return view('admin.manageSUBcategories',compact('show','show0'));
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
            'subcat_name'=>'required|unique:subcategories,subcat_name'
        ]);
        $save=new subcategories();
        $save->cat_id=$request->cat_id;
        $save->subcat_name=$request->subcat_name;
        $save->subcat_slug=$this->slug_generator($request->subcat_name);
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
        //$show=subcategories::with('categories')->find($id);
        $shw=subcategories::find($id);

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
            'subcat_name'=>'required|unique:subcategories,subcat_name',
            'cat_id'=>'required',
        ]);
        $save = subcategories::find($request->id);
        $save->cat_id=$request->cat_id;
        $save->subcat_name=$request->subcat_name;
        $save->subcat_slug=$this->slug_generator($request->subcat_name);
        $save->save();
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
        $delete= subcategories::find($id);
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
