<?php

namespace App\Http\Controllers;

use App\Models\Studs;
use Illuminate\Http\Request;


class StudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studs = Studs::all();
        return view('studsTable', compact('studs'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studs  $studs
     * @return \Illuminate\Http\Response
     */
    public function show(Studs $studs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studs  $studs
     * @return \Illuminate\Http\Response
     */
    public function edit(Studs $studs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Studs  $studs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studs $studs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studs  $studs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studs $studs)
    {
        //
    }
}
