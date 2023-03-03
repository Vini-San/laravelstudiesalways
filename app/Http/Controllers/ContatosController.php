<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use App\Http\Requests\StoreContatosRequest;
use App\Http\Requests\UpdateContatosRequest;

class ContatosController extends Controller
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
     * @param  \App\Http\Requests\StoreContatosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContatosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function show(Contatos $contatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contatos $contatos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContatosRequest  $request
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContatosRequest $request, Contatos $contatos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contatos $contatos)
    {
        //
    }
}
