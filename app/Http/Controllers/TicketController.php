<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    //

    public function ajouterTicket(Request $request)
    {
        // dd($request);
        $ticket = new Ticket();
        $ticket->prix=$request->input('prix');
        $ticket->quantite=$request->input('quantite');
        $ticket->type=$request->input('type');
        $ticket->event_id=$request->input('event_id');

        $ticket->save();

        return redirect()->back()->with('success', 'Ticket added successfully');

    }
}
