<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Http\Requests\StoreCommandeRequest;
use App\Http\Requests\UpdateCommandeRequest;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::latest()->get();

        return view('commandes.index', compact("commandes"));
    }

    public function create()
    {
        return view('commandes.create');
    }

    public function store(StoreCommandeRequest $request)
    {
        //
    }

    public function show(Commande $commande)
    {
        //
    }

    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommandeRequest $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
