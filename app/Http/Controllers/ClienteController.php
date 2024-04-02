<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClienteController extends Controller
{
    /**
     * Muestra todos los clientes.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    /**
     * Crea un nuevo cliente.
     */
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return response()->json($cliente, 201);
    }

    /**
     * Muestra un cliente específico.
     */
    public function show($idCliente)
    {
        $cliente = Cliente::findOrFail($idCliente);
        return response()->json($cliente);
    }

    /**
     * Actualiza un cliente existente.
     */
    public function update(Request $request, $idCliente)
    {
        $cliente = Cliente::findOrFail($idCliente);
        $cliente->update($request->all());
        return response()->json($cliente, 200);
    }

    /**
     * Elimina un cliente existente.
     */
    public function destroy($idCliente)
    {
        Cliente::findOrFail($idCliente)->delete();
        return response()->json(null, 204);
    }

}
