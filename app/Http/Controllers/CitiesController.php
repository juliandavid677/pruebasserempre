<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities;


class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = Cities::get();
        return $cities;
    }


    public function store(Request $request)
    {
        $cities = new Cities();
        $cities->cod = $request->codigo;
        $cities->name = $request->nombre;
        $cities->save();
        return $cities;
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
        $cities = Cities::find($id);
        $cities->cod = $request->codigo;
        $cities->name = $request->nombre;
        $cities->save();
        return $cities;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cities = Cities::find($id);
        $cities->delete();
        return $cities;
    }
}
