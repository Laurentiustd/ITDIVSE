<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SE</title>
    @vite('resources/css/list-booked.css')
</head>

<body>
    <div class="card-border">
        <div class="list-booked">List Booked</div>
        <div class="scroll">
            @foreach($allBookings as $booking)
            <div class="card">
                <div class="card-head-booked">
                    <div class="card-theater">{{ $booking->TheaterLocation }}</div>
                </div>
                <div class="card-body-booked">
                    <div>No Ticket: {{ $booking->BookingID }}</div>
                    <div>Movie Title: {{ $booking->movie->Title }}</div>
                    <div>Date: {{ $booking->BookingDate }} ({{ $booking->BookingTime }})</div>
                    <div>Seat Number: {{ $booking->SeatNumber }}</div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</body>

</html>