<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeset_cityRequest;
use App\Http\Requests\Updateset_cityRequest;
use App\Models\set_city;

class SetCityController extends Controller
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
     * @param  \App\Http\Requests\Storeset_cityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeset_cityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\set_city  $set_city
     * @return \Illuminate\Http\Response
     */
    public function show(set_city $set_city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\set_city  $set_city
     * @return \Illuminate\Http\Response
     */
    public function edit(set_city $set_city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateset_cityRequest  $request
     * @param  \App\Models\set_city  $set_city
     * @return \Illuminate\Http\Response
     */
    public function update(Updateset_cityRequest $request, set_city $set_city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\set_city  $set_city
     * @return \Illuminate\Http\Response
     */
    public function destroy(set_city $set_city)
    {
        //
    }
}
