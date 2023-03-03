<?php

namespace App\Http\Controllers;

use App\Models\todoExemplo;
use App\Http\Requests\StoretodoExemploRequest;
use App\Http\Requests\UpdatetodoExemploRequest;

class TodoExemploController extends Controller
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
     * @param  \App\Http\Requests\StoretodoExemploRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretodoExemploRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todoExemplo  $todoExemplo
     * @return \Illuminate\Http\Response
     */
    public function show(todoExemplo $todoExemplo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todoExemplo  $todoExemplo
     * @return \Illuminate\Http\Response
     */
    public function edit(todoExemplo $todoExemplo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetodoExemploRequest  $request
     * @param  \App\Models\todoExemplo  $todoExemplo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetodoExemploRequest $request, todoExemplo $todoExemplo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todoExemplo  $todoExemplo
     * @return \Illuminate\Http\Response
     */
    public function destroy(todoExemplo $todoExemplo)
    {
        //
    }
}
