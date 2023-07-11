<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'telefone' => 'required',
        ]);

        return Cliente::create($request->all());
    }

    public function show($id)
    {
        return Cliente::findOrfail($id);
    }

    public function destroy($id)
    {
        $request = Cliente::findOrFail($id);
        $request->delete();

        return response()->json(['message' => 'Registro excluído com sucesso']);
    }
}
