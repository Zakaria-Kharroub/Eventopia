<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    public function ajouterEvent(Request $request){
        $request ->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
            'categorie_id' => 'required'
        ]);



        $event = new Evenement();
        $event ->title =$request->input('title');
        $event ->description =$request->input('description');
        $event ->date =$request->input('date');
        $event ->lieu =$request->input('lieu');

        $event-> acceptation=$request->input('acceptation');

        $event ->categorie_id =$request->input('categorie_id');
        $event ->user_id = auth()->user()->id;
        $event ->etat = 'attent';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images',$name);
            $event->image = $name;
        }
        $event->save();

        return redirect()->back()->with('success', 'Event added successfully');
    }




    public function deleteEvent($id){
        $event = Evenement::find($id);
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully');
    }




    public function updateEvent(Request $request, $id){
        $request ->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',

            'categorie_id' => 'required'
        ]);

        $event = Evenement::find($id);
        $event ->title =$request->input('title');
        $event ->description =$request->input('description');
        $event ->date =$request->input('date');
        $event ->lieu =$request->input('lieu');


        $event ->categorie_id =$request->input('categorie_id');
        $event ->user_id = auth()->user()->id;
        $event ->etat = 'attent';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images',$name);
            $event->image = $name;
        }
        $event->save();

        return redirect()->back()->with('success', 'Event updated successfully');
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
