<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestation;

class PrestationViewController extends Controller
{

    public function showPrestationRestauration()
    {
        $dejeuner = Prestation::with('categorie')->findOrFail(1);
        $diner = Prestation::with('categorie')->findOrFail(2);
        
        return view('pages.prestations', [
            'dejeuner' => $dejeuner,
            'diner' => $diner,
        ]);
    }
}
