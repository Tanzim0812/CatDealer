<?php

namespace App\Http\Controllers;

use App\categories;
use App\product;
use App\subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getcat=DB::table('categories')->pluck("category_name","id");
        $show=product::get();
        return view('admin.product',compact('show','getcat'));
    }
public function getsubcat($id){
    $states = DB::table('subcategories')->where("cat_id",$id)->pluck("subcat_name","id");
    return json_encode($states);
    //return response()->json(['data'=>$states],200);
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
        $product = new product();
        $product->cat_id = $request->cat_id;
        $product->subcat_id = $request->subcat_id;
        $product->title = $request->title;
        $product->details = $request->details;
        $product->previous_price = $request->previous_price;
        $product->offer_price = $request->offer_price;
        $product->qty = $request->qty;

        if ($request->hasFile('image')){
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time(). '.'. $extension;
        $file->move('files/uploads/',$filename);
        $product->image = $filename;

    }

        $i=1;
        $str="0123456789";
        $str=str_shuffle($str);
        $str=substr($str,0,7);
        //$strr=time().$str;
        $strr=$str.$i;
        $product->hscode = $strr;
        $i++;

        //dd($product);
        $product->save();
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
        $shw=product::find($id);
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

        $update = product::find($request->id);
        $update->cat_id = $request->cat_id;
        $update->subcat_id = $request->subcat_id;
        $update->title = $request->title;
        $update->details = $request->details;
        $update->previous_price = $request->previous_price;
        $update->offer_price = $request->offer_price;
        $update->hscode = $request->hscode;
        $update->qty = $request->qty;

        $update->image = $request->image;

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
        $delete= product::find($id);
        $delete->delete();
        Session::flash('delete','Successfully Deleted!!');
        return back();
    }
    public function status($id,$product_status){
        $product=product::find($id);
        $product->status=$product_status;
        $product->save();
        return response()->json(['message'=>'success']);

    }

}
