<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Evenement;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Categorie::all();
        $events = Evenement::with('tickets')->where('user_id', Auth::id())->get();
        $allevents = Evenement::where('etat','accept')->get();
        return view('home', compact('categories', 'events', 'allevents'));
    }

    public function search(Request $request)
    {
        $searchInput = $request->input('searchInput');

        $events = Evenement::where('title', 'LIKE', '%' . $searchInput . '%')
        ->where('etat','accept')
        ->get();

        return response()->json(['events' => $events]);
    }








    public function filterCategorie(Request $request)
    {
        $category_id = $request->input('category');

        if ($category_id) {
            $allevents = Evenement::where('categorie_id', $category_id)->where('etat','accept')->get();
        } else {
            $allevents = Evenement::where('etat','accept')->get();
        }
        $events = Evenement::with('tickets')->where('user_id', Auth::id())->get();
        $categories = Categorie::all();
        return view('home', compact('categories', 'allevents', 'events'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
