<?php

namespace App\Http\Controllers\admin\permissions;

use App\Http\Controllers\Controller;
use App\Models\admin\Permission;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('superadmin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);
        $permission = Permission::create($validate);
        Alert::success('Insection', 'Permission ajoutée avec succès.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $permission = Permission::Find($id);

        $validate = $request->validate([
            'name' => 'required'
        ]);

        Permission::whereId($id)->update($validate);
       // Alert::success('Modification', 'Role modifé avec succès.');
        return redirect()->back()->with('success', 'Permission modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Permission::whereId($id)->delete();
        Alert::success('Suppression', 'Permission supprimé avec succès.');
        return redirect()->back();
    }
}
