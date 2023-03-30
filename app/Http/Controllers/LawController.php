<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLawRequest;
use App\Http\Requests\UpdateLawRequest;
use App\Models\Law;

class LawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laws = Law::all();

        return view('law.index', compact('laws'));
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
     * @param  \App\Http\Requests\StoreLawRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLawRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Law  $law
     * @return \Illuminate\Http\Response
     */
    public function show(Law $law)
    {
        return view('law.show', compact('law'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Law  $law
     * @return \Illuminate\Http\Response
     */
    public function edit(Law $law)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLawRequest  $request
     * @param  \App\Models\Law  $law
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLawRequest $request, Law $law)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Law  $law
     * @return \Illuminate\Http\Response
     */
    public function destroy(Law $law)
    {
        //
    }
}
