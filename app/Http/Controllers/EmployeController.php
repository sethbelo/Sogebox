<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Departement;
use App\Http\Requests\StoreEmployeRequest;
use App\Http\Requests\UpdateEmployeRequest;

class EmployeController extends Controller
{
    public function index()
    {
        $employes = Employe::latest()->get();

        return view("employes.index", compact("employes"));
    }

    public function create()
    {
        $departements = Departement::latest()->get();

        return view('employes.create', compact('departements'));
    }

    public function store(StoreEmployeRequest $request)
    {
        try {
            $employe = Employe::firstOrCreate([
                'nom' => $request->input('nom'),
                'postnom' => $request->input('postnom'),
                'prenom' => $request->input('prenom'),
                'genre' => $request->input('genre'),
                'etat_civil' => $request->input('etat_civil'),
                'nationalite' => $request->input('nationalite'),
                'date_naissance' => $request->input('date_naissance'),
                'adresse_physique' => $request->input('adresse_physique'),
                'telephone' => $request->input('telephone'),
                'date_embauche' => $request->input('date_embauche'),
                'salaire' => $request->input('salaire'),
                'poste' => $request->input('poste'),
                'departement_id' => $request->input('departement_id'),
            ]);
            return redirect()->route('employes.index')->with('success', 'Employé enregistré avec succès!');
        } catch (\Throwable $th) {
            return back()->withErrors(['error', 'Une erreur s\'est produite lors de la creation du nouvel employé.'])->withInput();
        }
    }


    public function show(Employe $employe)
    {
        //
    }

    public function edit(Employe $employe)
    {
        //
    }

    public function update(UpdateEmployeRequest $request, Employe $employe)
    {
        //
    }

    public function destroy(Employe $employe)
    {
        try {
            $employe->delete();

            return redirect()->route('employes.index')->with('success', 'Employé supprimé avec succès !');
        } catch (\Throwable $th) {
            return back()->with('error', 'Une erreur s\'est produite lors de la suppression de l\'employé !');
        }
    }
}
