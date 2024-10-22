<?php

namespace App\Http\Controllers;

use App\Models\Cabane;
use App\Models\Equipement;
use App\Models\Prestation;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CabaneController extends Controller
{
    /**
     * Afficher les informations des cabanes
     */
    public function index()
    {
        $afficherCabanes = Cabane::all();

        return view(
            'pages.admin.cabanes-create',
            ['cabanes' => $afficherCabanes]
        );
    }

    /**
     * Afficher le formulaire de création de cabane
     */
    public function create()
    {
        return view('pages.admin.cabanes-create'); // Si vous avez une vue dédiée pour l'ajout
    }

    /**
     * Ajouter de nouvelles cabanes
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                'nomCabane' => 'required|string|min:3',
                'description' => 'required|string',
                'capacite' => 'required|integer',
                'prix' => 'required|decimal:0',
                'disponibilite' => 'required|boolean',

            ]
        );
        Cabane::create($request->all());

        // return redirect("/admin/cabanes");
        return redirect()->route('cabanes.index')->with('success', 'Cabane ajoutée avec succès !');
    }



    /**
     * Modifier un ou plusieurs informations
     */
    public function edit(string $id)
    {
        $cabane = Cabane::findOrFail($id);
        // dd($edit);
        return view("pages.admin.editCabane", compact('cabane'));
    }

    /**
     * Mettre à jour les informations
     */
    public function update(Request $request, $id)
    {
        // dd($request); 
        // dd($request->nomCabane);
        $validatedData =  $request->validate(
            [
                'nomCabane' => 'required|string|min:3',
                'description' => 'required|string',
                'capacite' => 'required|integer',
                'prix' => 'required|numeric',
                'disponibilite' => 'required|boolean',
            ]
        );
        // dd($request->nomCabane);
        // dd($id);         

        $update = Cabane::findOrFail($id);
        $update->update($validatedData);

        // return redirect()->route('afficherCabane');
        return redirect()->route('cabanes.index')->with('success', 'Cabane mise à jour avec succès !');
    }

    /**
     * Mettre à jour les informations
     */
    // public function updateTest(Request $request, $id)
    // {
    //     $validatedData =  $request->validate(
    //         [
    //         'nomCabane'=>'required|string|min:3',
    //         'description'=>'required|string',
    //         'capacite'=>'required|integer',
    //         'prix'=>'required|numeric',
    //         'disponibilite'=>'required|boolean',
    //         ]);
    //         // dd($request->nomCabane);

    //         $update=Cabane::findOrFail($id);           
    //         $update->update($validatedData);

    //         return redirect()->route('afficherCabane');
    //         // return view('pages.admin.infos');
    // }



    /**
     * Supprimer une cabane 
     */
    public function destroy(string $id)
    {
        $delete  = Cabane::findOrFail($id);
        $delete->delete();

        // return redirect("/admin/cabanes");
        return redirect()->route('cabanes.index')->with('success', 'Cabane supprimée avec succès !');
    }
}
