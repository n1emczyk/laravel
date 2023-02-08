<?php

namespace App\Http\Controllers;

use App\Models\ucheniks;
use Illuminate\Http\Request;

class UcheniksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $ucheniks = new ucheniks();
            $ucheniks->Имя = $req->input('Имя');
            $ucheniks->Фамилия = $req->input('Фамилия');
            $ucheniks->Возраст = $req->input('Возраст');
            $ucheniks->Группа = $req->input('Группа');
            $ucheniks->Почта = $req->input('Почта');
            $ucheniks->Дата_рождения = $req->input('Дата_рождения');
            
            $ucheniks->save();
            
            return redirect()->route('home');
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
     * @param  \App\Models\ucheniks  $ucheniks
     * @return \Illuminate\Http\Response
     */
    public function show(ucheniks $ucheniks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ucheniks  $ucheniks
     * @return \Illuminate\Http\Response
     */
    public function edit(ucheniks $ucheniks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ucheniks  $ucheniks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ucheniks $ucheniks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ucheniks  $ucheniks
     * @return \Illuminate\Http\Response
     */
    public function destroy(ucheniks $ucheniks)
    {
        //
    }
}
