<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\AcceptanceEmail;
use App\Mail\DeclineEmail;



class ReservationController extends Controller
{
    /**
     * Function to display all Reservations
     */
    public function reservation()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $reservations=DB::table('reservations')->get();
        $users=DB::table('users')->get();

         return view('Admin.all_reservations',compact('reservations','users'));

    }
    /**
     * Function To accept reservation
     */
    public function acceptReservation($reservationId)
    {
        $reservation = DB::table('reservations')->where('id', $reservationId)->first();

        $update = DB::table('reservations')->where('id', $reservationId)->update(['status' => 1]);

        if ($update) {
            session()->flash('success', 'Reservation accepted successfully !');
        } else {
            session()->flash('wrong', 'something wrong retry !');
        }

        $userEmail = $reservation->reserv_email;

        // Send acceptance email
        Mail::to($userEmail)->send(new AcceptanceEmail($reservation));
        // Redirect back or to another page
        return redirect()->route('/admin/reservation');
    }
    /**
     * Function to decline reservation
     */

    public function declineReservation($reservationId)
    {
        $reservation = DB::table('reservations')->where('id', $reservationId)->first();

        $update = DB::table('reservations')->where('id', $reservationId)->update(['status' => 2]);

        if ($update) {
            session()->flash('success', 'Reservation declined successfully !');
        } else {
            session()->flash('wrong', 'something wrong retry !');
        }

        $userEmail = $reservation->reserv_email;

        // Send acceptance email
        Mail::to($userEmail)->send(new DeclineEmail($reservation));
        // Redirect back or to another page
        return redirect()->route('/admin/reservation');
    }
}
