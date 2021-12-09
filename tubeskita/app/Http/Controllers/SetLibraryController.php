<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeset_libraryRequest;
use App\Http\Requests\Updateset_libraryRequest;
use App\Models\set_library;

class SetLibraryController extends Controller
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
     * @param  \App\Http\Requests\Storeset_libraryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeset_libraryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\set_library  $set_library
     * @return \Illuminate\Http\Response
     */
    public function show(set_library $set_library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\set_library  $set_library
     * @return \Illuminate\Http\Response
     */
    public function edit(set_library $set_library)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateset_libraryRequest  $request
     * @param  \App\Models\set_library  $set_library
     * @return \Illuminate\Http\Response
     */
    public function update(Updateset_libraryRequest $request, set_library $set_library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\set_library  $set_library
     * @return \Illuminate\Http\Response
     */
    public function destroy(set_library $set_library)
    {
        //
    }
}
