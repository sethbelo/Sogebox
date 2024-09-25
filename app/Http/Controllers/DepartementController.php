<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Http\Requests\StoreDepartementRequest;
use App\Http\Requests\UpdateDepartementRequest;

class DepartementController extends Controller
{
    public function index()
    {
        $departements = Departement::latest()->get();

        return view('departements.index', compact('departements'));
    }

    public function create()
    {
        //
    }

    public function store(StoreDepartementRequest $request)
    {
        try {
            // Create the department
            $departement = new Departement();
            $departement->libelle = $request->input('libelle');

            // Save the department to the database
            $departement->save();
            return redirect()->route('departements.index')->with('success', 'Département créé avec succès.');
        } catch (\Throwable $th) {
            return back()->withErrors(['error', 'Une erreur s\'est produite lors de la creation du departement.'])->withInput();
        }

        // Redirect or return success response
    }

    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartementRequest $request, Departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        try {
            $departement->delete();

            return back()->with('success', 'Département supprimé avec succès !');
        } catch (\Throwable $th) {
            return back()->with('error', 'Une erreur s\'est produite lors de la suppression du département');
        }
    }
}
