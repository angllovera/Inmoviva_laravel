<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permission::all(); // Obtén todos los roles de la base de datos
        return view('permisos.index', compact('permisos')); // Devuelve la vista con la lista de roles
    }

    /**
     * Show the form for creating a new role.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permisos.create'); // Devuelve la vista del formulario de creación
    }

    /**
     * Store a newly created role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        /*$permission = Permission::create(['name' => '$permission']);
        return redirect()->route('permisos.index')->with('success', 'Permiso creado exitosamente.');*/ // Redirige con un mensaje de éxito
        Permission::create($request->only('name')); // Crea un nuevo rol con los datos del formulario
        return redirect()->route('permisos.index')->with('success', 'Permiso creado exitosamente.'); // Redirige con un mensaje de éxito
    
        }

    /**
     * Display the specified role.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permiso)
    {
        return view('permisos.show', compact('permiso')); // Devuelve la vista con los detalles del rol
    }

    /**
     * Show the form for editing the specified role.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permiso)
    {
        return view('permisos.edit', compact('permiso')); // Devuelve la vista del formulario de edición
    }

    /**
     * Update the specified role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permiso)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $permiso->update($request->only('name')); // Actualiza el rol con los datos del formulario
        return redirect()->route('permisos.index')->with('success', 'Permiso actualizado exitosamente.'); // Redirige con un mensaje de éxito
    }

    /**
     * Remove the specified role from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permiso)
    {
        $permiso->delete(); // Elimina el rol
        return redirect()->route('permisos.index')->with('success', 'Permiso eliminado exitosamente.'); // Redirige con un mensaje de éxito
    }
}

