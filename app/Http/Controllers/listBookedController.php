<?php

namespace App\Http\Controllers;
use App\Models\Bookings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class listBookedController extends Controller
{
    public function getListBooked (){
        $userID = Auth::id();
        $userBookings = Bookings::where('UserID', $userID)->with(['movie' => function ($query) {
            $query->select('MovieID', 'Title'); 
        }])->get();
        return view('list-booked', compact('userBookings'));
    }
}
