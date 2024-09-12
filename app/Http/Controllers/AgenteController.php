<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use Illuminate\Http\Request;

class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agentes = Agente::all();
        return view('agentes.index', compact('agentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:agentes,email',
            'telefono' => 'nullable|string|max:8',
        ]);

        Agente::create($request->all());
        return redirect()->route('agentes.index')
            ->with('success', 'Agente creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Buscar el usuario por ID
        $agente = Agente::findOrFail($id);
        return view('agentes.show', compact('agente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Buscar el usuario por ID
        $agente = Agente::findOrFail($id);
        return view('agentes.edit', compact('agente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Buscar el usuario por ID
        $agente = Agente::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:agentes,email,' . $agente->id,
            'telefono' => 'nullable|string|max:8',
        ]);

        $agente->update($request->all());
        return redirect()->route('agentes.index')->with('success', 'Agente actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Obtener el usuario por su ID
        $agente = Agente::findOrFail($id);

        // Eliminar el usuario
        $agente->delete();

        return redirect()->route('agentes.index')->with('success', 'Agente eliminado con éxito.');
    }
}
