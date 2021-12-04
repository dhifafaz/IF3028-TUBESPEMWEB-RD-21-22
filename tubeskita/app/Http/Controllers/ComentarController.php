<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComentarRequest;
use App\Http\Requests\UpdateComentarRequest;
use App\Models\Comentar;

class ComentarController extends Controller
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
     * @param  \App\Http\Requests\StoreComentarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComentarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentar  $comentar
     * @return \Illuminate\Http\Response
     */
    public function show(Comentar $comentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentar  $comentar
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentar $comentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComentarRequest  $request
     * @param  \App\Models\Comentar  $comentar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComentarRequest $request, Comentar $comentar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentar  $comentar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentar $comentar)
    {
        //
    }
}
