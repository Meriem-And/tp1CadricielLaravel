<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\ville;
use Illuminate\Http\Request;


class EtudiantController extends Controller
{
    //
    public function index()
    {
        $etudiants = Etudiant::select('*','etudiants.id as etudiant_id')
            ->join('villes','etudiants.ville_id','=','villes.id')
            ->orderBy('etudiants.id', 'ASC')
            ->get();

        return view('etudiants', ['etudiants' => $etudiants]);
    }


    public function show($id)

    {

        $etudiant = Etudiant::select('*','etudiants.id as etudiant_id')
            ->join('villes','etudiants.ville_id','=','villes.id')
            ->where('etudiants.id','=',$id)
            ->first();




        return view('details', ['etudiant' => $etudiant]);

    }

    public function create()
    {
        $villes = Ville::all();
        return view('ajouterEtudiant', ['villes' => $villes]);
    }


    public function save(Request $request)
    {
        $newetudiant = Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'naissance' => $request->naissance,
            'ville_id' => $request->ville_id,
        ]);
        $newetudiant->save();

        return redirect('/etudiants');
    }

    public function update($id)
    {
        $villes = Ville::all();
        $etudiant = Etudiant::find($id);


        return view('modifierEtudiant', ['villes' => $villes,
            'etudiant' => $etudiant]);
    }

    public function edit(Request $request )
    {
        $id = $request->id;
        $etudiant = Etudiant::find($id);


        $etudiant->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'naissance' => $request->naissance,
            'ville_id' => $request->ville_id,
        ]);
        $etudiant->save();
        return redirect('/etudiants');
    }

    public function destroy($id)
    {
        Etudiant::destroy($id);
        return redirect('/etudiants');
    }
}
