<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Evenement;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $evenements = Evenement::all();
        $categories = Categorie::all();
        $users = User::all();
        return view('admin.dashboard', compact('evenements', 'categories', 'users'));
    }

//--------- gestion des categories------------------------------
    public function getCategorie()
    {
        $categories = Categorie::all();
        return view('admin.categorie', compact('categories'));
    }

    public function ajouterCategorie(Request $request)
    {
        $request->validate([
            'name'=> 'required'
        ]);
        $categorie =new Categorie();
        $categorie->name = $request->input('name');
            $categorie->save();
        // dd($categorie);
        return redirect()->route('categorie');
    }


    public function updateCategorie(Request $request, $id){
        $request->validate([
           'name' => 'required'
        ]);
        $categorie=Categorie::find($id);
            $categorie ->name = $request->input('name');
        $categorie->save();
        return redirect()->route('categorie');
    }

    public function deleteCategorie($id){
           $categorie= Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categorie');
    }

























//--------- gestion des evenements------------------------------
    public function getEvenement()
    {
        $evenements = Evenement::all();
        return view('admin.event', compact('evenements'));
    }

    public function updateEtat(Request $request, $id){
        $evenement=Evenement::find($id);
        $evenement->etat = $request->input('etat');
        $evenement->save();
        return redirect()->route('event');
    }






// --------- gestion des utilisateurs------------------------------

    public function getUsers()
    {
        $users = User::with('role')->whereIn('role_id', [2, 3])->get();
        return view('admin.users', compact('users'));
    }

    public function updateRole(Request $request, $id)
{
    $user = User::find($id);
    $user->role_id = $request->input('role');
    $user->save();
    return redirect()->route('userslist');
}



// -----------------gestion des statistiques-------------------------




    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
