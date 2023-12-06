<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Booked</title>
    @vite('resources/css/list-booked.css')

</head>

<body>
    <x-navbar />
    <div style="display: flex; justify-content: center;align-items: center;">
        <div class="card-border">
            <div class="list-booked">List Booked</div>
            <div class="scroll">
                @foreach($userBookings as $user)
                <div class="card">
                    <div class="card-head-booked">
                        <div class="card-theater">{{ $user->TheaterLocation }}</div>
                    </div>
                    <div class="card-body-booked">
                        <div style="display: flex; flex-direction: column;">
                            <div>No Ticket: {{ $user->BookingID }}</div>
                            <div>Movie Title: {{ $user->movie->Title }}</div>
                            <div>Date: {{ $user->BookingDate }} ({{ $user->BookingTime }})</div>
                            <div>Seat Number: {{ $user->SeatNumber }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>