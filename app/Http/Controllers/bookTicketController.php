<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\User;
use App\Models\Bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bookTicketController extends Controller
{
    public function create(Request $request)
    {
        // $request->validate([
        //     'BookingDate' => ['required', 'date'],
        //     'BookingTime' => ['required', 'string', 'max:255'],
        //     'SeatNumber' => ['required', 'string', 'max:255'],
        //     'TheaterLocation' => ['required', 'string', 'max:255'],
        //     // 'userID' => ['required', 'exists:users,id'],
        //     'movieID' => ['required', 'exists:movies,MovieID'],
        // ]);

        $today = \Carbon\Carbon::today();
        $movie = Movie::where('MovieID', $request->movieID)->first();
        // return $movie->MovieID;
        $user = Auth::user();
        // return $user->id;
        // if (!$movie || !$user) {
        //     return redirect()->back()->with('error', 'User tidak ditemukan.');
        // }
        $booking = Bookings::create([
            'BookingDate' => $today,
            'BookingTime' => $request->BookingTime,
            'SeatNumber' => $request->SeatNumber,
            'TheaterLocation' => $request->TheaterLocation,
            'UserID' => $user->id,
            'MovieID' => $movie->MovieID,
        ]);
        return redirect('/');
    }

    
}
