<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all(); // Obtén todos los roles de la base de datos
        return view('roles.index', compact('roles')); // Devuelve la vista con la lista de roles
    }

    /**
     * Show the form for creating a new role.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create'); // Devuelve la vista del formulario de creación
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
            'descripcion' => 'nullable|string',
        ]);

        Role::create($request->only('name', 'descripcion')); // Crea un nuevo rol con los datos del formulario
        return redirect()->route('roles.index')->with('success', 'Rol creado exitosamente.'); // Redirige con un mensaje de éxito
    }

    /**
     * Display the specified role.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role')); // Devuelve la vista con los detalles del rol
    }

    /**
     * Show the form for editing the specified role.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role')); // Devuelve la vista del formulario de edición
    }

    /**
     * Update the specified role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $role->update($request->only('name', 'descripcion')); // Actualiza el rol con los datos del formulario
        return redirect()->route('roles.index')->with('success', 'Rol actualizado exitosamente.'); // Redirige con un mensaje de éxito
    }

    /**
     * Remove the specified role from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete(); // Elimina el rol
        return redirect()->route('roles.index')->with('success', 'Rol eliminado exitosamente.'); // Redirige con un mensaje de éxito
    }
}
