<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSetCategoryRequest;
use App\Http\Requests\UpdateSetCategoryRequest;
use App\Models\SetCategory;

class SetCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreSetCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSetCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SetCategory  $setCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SetCategory $setCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SetCategory  $setCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SetCategory $setCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSetCategoryRequest  $request
     * @param  \App\Models\SetCategory  $setCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSetCategoryRequest $request, SetCategory $setCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SetCategory  $setCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SetCategory $setCategory)
    {
        //
    }
}
