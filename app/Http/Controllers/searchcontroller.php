<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class searchcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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



    public function getAutocompleteData(Request $request)
    {
        if ($request->has('term')) {
            return Product::where('title', 'like', '%' . $request->input('term') . '%')->get();
        }
    }
    public function getproduct(Request $request){

        $search = $request->search;

        if($search == ''){
            $employees = product::orderby('title','asc')->select('id','title')->limit(5)->get();
        }else{
            $employees = product::orderby('title','asc')->select('id','title')->where('title', 'like', '%' .$search . '%')->limit(5)->get();
        }

        $response = array();
        foreach($employees as $employee){
            $response[] = array("value"=>$employee->id,"label"=>$employee->title);
        }

        return response()->json($response);
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
