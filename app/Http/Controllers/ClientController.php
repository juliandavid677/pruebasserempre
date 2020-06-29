<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliet = Client::get();
        return $cliet;
    }


    public function store(Request $request)
    {
        $client = new Client();
        $client->cod = $request->codigo;
        $client->name = $request->nombre;
        $client->city_id = $request->ciudad;
        $client->save();
        return $client;
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
        $client = Client::find($id);
        $client->cod = $request->codigo;
        $client->name = $request->nombre;
        $client->city_id = $request->ciudad;
        $client->save();
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return $client;
    }
}
