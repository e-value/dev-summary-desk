<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLawCategoryRequest;
use App\Http\Requests\UpdateLawCategoryRequest;
use App\Models\LawCategory;

class LawCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreLawCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLawCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LawCategory  $lawCategory
     * @return \Illuminate\Http\Response
     */
    public function show(LawCategory $lawCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LawCategory  $lawCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(LawCategory $lawCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLawCategoryRequest  $request
     * @param  \App\Models\LawCategory  $lawCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLawCategoryRequest $request, LawCategory $lawCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LawCategory  $lawCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(LawCategory $lawCategory)
    {
        //
    }
}
