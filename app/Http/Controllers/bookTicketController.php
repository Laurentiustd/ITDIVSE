<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\User;
use App\Models\Bookings;
use Illuminate\Http\Request;

class bookTicketController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'BookingDate' => ['required', 'date'],
            'BookingTime' => ['required', 'string', 'max:255'],
            'SeatNumber' => ['required', 'string', 'max:255'],
            'TheaterLocation' => ['required', 'string', 'max:255'],
            'userID' => ['required', 'exists:users,id'],
            'movieID' => ['required', 'exists:movies,id'],
        ]);
        $today = \Carbon\Carbon::today();
        $movie = Movie::find($request->movieID);
        $user = User::find($request->userID);
        if (!$movie || !$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }
        $booking = Bookings::create([
            'BookingDate' => $today->format('d-m-Y'),
            'BookingTime' => $request->BookingTime,
            'SeatNumber' => $request->SeatNumber,
            'TheaterLocation' => $request->TheaterLocation,
            'user_id' => $user->id,
            'movie_id' => $movie->id,
        ]);
        return redirect('/');
    }

    
}
