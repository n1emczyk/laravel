<?php

namespace App\Http\Controllers;

use App\Models\Prepod;
use Illuminate\Http\Request;

class PrepodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Prepod::all();
        return view('prepodTable', compact('data'));
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
     * @param  \App\Models\Prepod  $prepod
     * @return \Illuminate\Http\Response
     */
    public function show(Prepod $prepod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prepod  $prepod
     * @return \Illuminate\Http\Response
     */
    public function edit(Prepod $prepod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prepod  $prepod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prepod $prepod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prepod  $prepod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prepod $prepod)
    {
        //
    }
}
