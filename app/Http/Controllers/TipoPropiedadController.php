<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoPropiedad;

class TipoPropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiposPropiedades = TipoPropiedad::paginate(10);
        return view('tipos-propiedades.index', compact('tiposPropiedades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipos-propiedades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        TipoPropiedad::create($request->all());

        return redirect()->route('tipos-propiedades.index')
            ->with('success', 'Tipo de propiedad creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipoPropiedad = TipoPropiedad::findOrFail($id);
        return view('tipos-propiedades.show', compact('tipoPropiedad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipoPropiedad = TipoPropiedad::findOrFail($id);
        return view('tipos-propiedades.edit', compact('tipoPropiedad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $tipoPropiedad = TipoPropiedad::findOrFail($id);
        $tipoPropiedad->update($request->all());

        return redirect()->route('tipos-propiedades.index')
            ->with('success', 'Tipo de propiedad actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipoPropiedad = TipoPropiedad::findOrFail($id);
        $tipoPropiedad->delete();

        return redirect()->route('tipos-propiedades.index')
            ->with('success', 'Tipo de propiedad eliminado con éxito.');
    }
}
