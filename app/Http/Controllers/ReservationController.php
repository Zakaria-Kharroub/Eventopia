<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Evenement;
use App\Models\Reservation;

class ReservationController extends Controller
{
    //




    public function myReservation()
    {
        $reservations = Reservation::where('user_id', auth()->user()->id)->with('ticket')->get();
        return view('myReservation', compact('reservations'));
    }



    public function ajouterReservation(Request $request)
    {
        $ticketId = $request->input('ticket_id');
        $userId = $request->input('user_id');


        $ticket = Ticket::find($ticketId);
        if (!$ticket) {
            return redirect()->back()->with('error', 'Ticket not found');
        }

        $evenement = Evenement::find($ticket->event_id);
        if ($evenement->acceptation === 'automatique') {
            $status = 'valider';
        } else {
            $status = 'attent';
        }

        $reservation = new Reservation();
        $reservation->ticket_id = $ticketId;
        $reservation->user_id = $userId;
        $reservation->status = $status;
        $reservation->save();

        $ticket->quantite--;
        $ticket->save();

        return redirect()->back()->with('success', 'Reservation added successfully');
    }


     public function requestReservation(){
        $userId = auth()->user()->id;
        $reservations = Reservation::with('ticket.evenement')
                        ->whereHas('ticket.evenement', function ($query) use ($userId) {
                            $query->where('user_id', $userId);

                            })

                            ->where('status', 'attent')
                            ->get();

    return view('requestReservation', compact('reservations'));
     }



     public function accepterReservation($id){
        $reservation = Reservation::find($id);
        $reservation->status = 'valider';
        $reservation->save();

        return redirect()->back()->with('success', 'Reservation accepted successfully');
     }

}
