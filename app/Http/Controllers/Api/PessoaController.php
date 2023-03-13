<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use App\Models\Telefones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();

        if ($pessoas->count() > 0) {
            return response()->json([
                'status' => 200,
                'pessoas' => $pessoas
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "no Record Found"
            ], 404);
        }
    }

    
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:191',
            'cpf' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'data_nasc' => 'required|string|max:191',
            'nascionalidade' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ], 422);
        } else {
            $pessoas = Pessoa::create([
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'email' => $request->email,
                'data_nasc' => $request->data_nasc,
                'nascionalidade' => $request->nascionalidade,
            ]);
        }

        if ($pessoas) {
            return response()->json([
                'status' => 200,
                'message' => 'Sucesso ' . $pessoas->id
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed'
            ], 500);
        }
    }
    public function show($id)
    {

        $pessoa = Pessoa::find($id);

        if ($pessoa) {
            return response()->json([
                'status' => 200,
                'pessoa' => $pessoa
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "nenhum resultado encontrado"
            ], 404);
        }
    }

    public function edit($id)
    {

        $pessoa = Pessoa::find($id);

        if ($pessoa) {
            return response()->json([
                'status' => 200,
                'pessoa' => $pessoa
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "nenhum resultado encontrado"
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {

        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:191',
            'cpf' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'data_nasc' => 'required|string|max:191',
            'nascionalidade' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ], 422);
        } else {

            $pessoa = Pessoa::find($id);

            if ($pessoa) {

                Pessoa::where('id', $id)->update([
                    'nome' => $request->nome,
                    'cpf' => $request->cpf,
                    'email' => $request->email,
                    'data_nasc' => $request->data_nasc,
                    'nascionalidade' => $request->nascionalidade,
                ]);


                return response()->json([
                    'status' => 200,
                    'message' => 'Atualizado com Sucesso'
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'Failed'
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        if ($pessoa) {

            $pessoa->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Dado Excluído'
            ], 200);
        } else {

            return response()->json([
                'status' => 500,
                'message' => 'Failed'
            ], 500);
        }
    }
}
