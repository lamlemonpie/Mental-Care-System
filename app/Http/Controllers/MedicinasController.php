<?php

namespace App\Http\Controllers;

use App\Medicina;
use Illuminate\Http\Request;

class MedicinasController extends Controller
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
     * @param  \App\Medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function show(Medicina $medicina)
    {
        dd($medicina);
        //return view('Prescriptions.medicamentos.ver',["medicina"=> $medicina]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicina $medicina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicina $medicina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicina $medicina)
    {
        //
    }
}
