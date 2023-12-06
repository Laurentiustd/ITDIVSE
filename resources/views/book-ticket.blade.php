<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SE</title>
    <!-- <link rel="stylesheet" href="../css/book-ticket.css"> -->
    @vite('resources/css/book-ticket.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Launch static backdrop modal</button>
    <form action="/book-new-ticket" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog " style="max-width: 1206px; height: 717px;">
                <div class="modal-content" style="width: 100%; height: 100%;">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="Book_Ticket">Book Ticket</div>
                        <div class="Movie_Title">{{ $movie->Title }}</div>
                        <img class="movie-cover" src="{{ asset('storage/' . $movie->Title . '/' . $movie->Cover) }}"/>
                        <div class="Theater"> Theater : </div>
                        <div class="dropdown" id="dropdown-theater">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Choose Theater :
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'Central Park Mall'">Central Park Mall</a></li>
                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'Pacific Place'">Pacific Place</a></li>
                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'Paris Van Java'">Paris Van Java</a></li>
                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'AEON Mall'">AEON Mall</a></li>
                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'Teraskota'">Teraskota</a></li>
                            </ul>
                        </div>
                        <div class="Time"> Time : </div>
                        <div class="dropdown" id="dropdown-time">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                                Choose Time :
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('timeSelected').value = '12.00 WIB'">12.00 WIB</a></li>
                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('timeSelected').value = '14.00 WIB'">14.00 WIB</a></li>
                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('timeSelected').value = '16.00 WIB'">16.00 WIB</a></li>
                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('timeSelected').value = '18.00 WIB'">18.00 WIB</a></li>
                            </ul>
                        </div>
                        <div class="Seat"> Seat : </div>
                        <div class="div-seat">
                            <div class="div-seat-row">
                                <button onclick="">1</button>
                                <button onclick="">2</button>
                                <button onclick="">3</button>
                                <button onclick="">4</button>
                                <button onclick="">5</button>
                                <button onclick="">6</button>
                                <button onclick="">7</button>
                                <button onclick="">8</button>
                                <button onclick="">9</button>
                                <button onclick="">10</button>
                            </div>
                            <div class="div-seat-row">
                                <button onclick="">11</button>
                                <button onclick="">12</button>
                                <button onclick="">13</button>
                                <button onclick="">14</button>
                                <button onclick="">15</button>
                                <button onclick="">16</button>
                                <button onclick="">17</button>
                                <button onclick="">18</button>
                                <button onclick="">19</button>
                                <button onclick="">20</button>
                            </div>
                            <div class="div-seat-row">
                                <button onclick="">21</button>
                                <button onclick="">22</button>
                                <button onclick="">23</button>
                                <button onclick="">24</button>
                                <button onclick="">25</button>
                                <button onclick="">26</button>
                                <button onclick="">27</button>
                                <button onclick="">28</button>
                                <button onclick="">29</button>
                                <button onclick="">30</button>
                            </div>
                        </div>
                        <input type="hidden" name="userID" value="{{ $user->UserID }}"> 
                        <!-- ini valuenya mau diubah , sama kek cara dapatin nama user pas login -->
                        <input type="hidden" name="movieID" value="{{ $movie->MovieID }}">
                        <input type="hidden" id="timeSelected" name="BookingTime">
                        <input type="hidden" id="theaterSelected" name="TheaterLocation">
                        <input type="text" name="SeatNumber" id="input-seat-number" placeholder="input seat number">
                        <button class="button-book">Book</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>