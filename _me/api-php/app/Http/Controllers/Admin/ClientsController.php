<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        $clients = $client->with('city.state')->orderBy('name')->paginate(4);

        return response($clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Client $client)
    {
        $rules = [
            'name' => 'required',
            'cpf' => 'required|unique:clients',
            'email' => 'required|email',
            'mobile_phone' => 'required',
            'city_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $dataClient = $request->all() + ['code' => str_random(5)];
        $client = $client->create($dataClient);
        
        $client = $client->with('city.state')->find($client->id);
        
        return response($client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client, $id)
    {
        $client = $client->with('city')->findOrFail($id);

        return response($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client, $id)
    {
        $rules = [
            'name' => 'required',
            'cpf' => 'required|unique:clients',
            'email' => 'required|email',
            'mobile_phone' => 'required',
            'city_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        $client
            ->findOrFail($id)
            ->update($request->all());
        
        $client = $client
            ->with('city.state')
            ->find($client->id);

        return response($client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, $id)
    {
        return response($client->destroy($id));
    }
}
