<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use App\Models\Telefones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TelefonesController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Telefones  $telefones
     * @return \Illuminate\Http\Response
     */
    public function show(Telefones $telefones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Telefones  $telefones
     * @return \Illuminate\Http\Response
     */
    public function edit(Telefones $telefones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Telefones  $telefones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telefones $telefones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Telefones  $telefones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telefones $telefones)
    {
        //
    }

    public function add(Request $request)
    {

        $pessoa = Pessoa::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'data_nasc' => $request->data_nasc,
            'nascionalidade' => $request->nascionalidade,
        ]);

        foreach ($request->telefone as $key => $value) {

            $telefone = DB::insert('insert into telefones (telefone, id_pessoa) values (?, ?)', [$value, $pessoa->id]);
        }

        if ($telefone) {
            return response()->json([
                'status' => 200,
                'message' => 'Sucesso '
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed'
            ], 500);
        }
    }
}
