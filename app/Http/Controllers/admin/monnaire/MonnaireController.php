<?php

namespace App\Http\Controllers\admin\monnaire;

use Illuminate\Http\Request;
use App\Models\admin\Monnaire;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class MonnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monnaires = Monnaire::all();

        return view('superadmin.monnaires.index', compact('monnaires'));
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
        $validation = $request->validate([
            "name_of_monnaie"      => "required",
            "symbol_of_monnaie"    => "required",
            "type_of_monnaie"      => "required",
            "stock_disponible"     => "nullable",
        ]);

        $tab = array(
            "name_of_monnaie"      =>   $validation['name_of_monnaie'],
            "symbol_of_monnaie"    =>   $validation['symbol_of_monnaie'],
            "type_of_monnaie"      =>   $validation['type_of_monnaie'],
            "stock_disponible"     =>   $validation['stock_disponible'],
        );

        $monnaire = Monnaire::create($tab);
        //dd($request->all(), $validation, $tab);
        Alert::success('Insection', 'Monnaire ajoutée avec succès.');
        return redirect()->back()->with('success', 'Monnaire ajoutée avec succès.');

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
        $validation = $request->validate([
            "name_of_monnaie"      => "required",
            "symbol_of_monnaie"    => "required",
            "type_of_monnaie"      => "required",
            "stock_disponible"     => "nullable",
        ]);

        $tab = array(
            "name_of_monnaie"      =>   $validation['name_of_monnaie'],
            "symbol_of_monnaie"    =>   $validation['symbol_of_monnaie'],
            "type_of_monnaie"      =>   $validation['type_of_monnaie'],
            "stock_disponible"     =>   $validation['stock_disponible'],
        );

        $monnaire = Monnaire::where('id', $id)->update($tab);
        //dd($request->all(), $validation, $tab);
        //Alert::success('Modification', 'Monnaire modifiée avec succès.');
        return redirect()->back()->with('success', 'Monnaire ajoutée avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Monnaire::whereId($id)->delete();
        #Alert::success('Suppression', 'Permission supprimé avec succès.');
        return redirect()->back()->with('success', 'Permission supprimé avec succès.');
    }
}
