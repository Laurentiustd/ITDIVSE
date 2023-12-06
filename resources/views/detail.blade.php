<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384 EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite('resources/css/book-ticket.css')

    <style>

    </style>
</head>

<body style="background-color: #f2d492">
    <nav>
        <x-navbar />
    </nav>
    <div class="container mt-5">
        <div class="card" style="background-color: #f8cb68;">
            <div class="card-body row">
                <div class="col-md-3">
                    <img src="{{ asset('storage/' . $movie->Title . '/' . $movie->Cover) }}" class="card-img-top rounded" alt="" style="width: 97%">
                </div>
                <div class="col-md-9">
                    <h3 class="mb-3">{{ $movie->Title }}</h3>
                    <div>
                        <div class="row">
                            <div class="col-md-2">
                                <h6 class="text-muted mb-4">Genre</h6>
                                <h6 class="text-muted mb-4">Duration</h6>
                                <h6 class="text-muted mb-4">Director</h6>
                                <h6 class="text-muted mb-4">Rating</h6>
                                <h6 class="text-muted mb-4">Release Date</h6>
                                <h6 class="text-muted mb-4">Synopsis</h6>
                            </div>
                            <div class="col-md-9">
                                <h6 class="text-muted mb-4">: {{ $movie->GenreName }}</h6>
                                <h6 class="text-muted mb-4">: {{ $movie->Duration }} minutes</h6>
                                <h6 class="text-muted mb-4">: {{ $movie->Director }}</h6>
                                <h6 class="text-muted mb-4">: {{ $movie->Rating }}</h6>
                                <h6 class="text-muted mb-4">: {{ $movie->ReleaseDate }}</h6>
                                <h6 class="text-muted mb-4">: {{ $movie->Description }}</h6>
                            </div>
                        </div>
                    </div>
                    <button class="btn mt-1 w-100 p-3" style="background-color: #f29559; color:black;" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book
                        Ticket
                    </button>
                </div>
            </div>
        </div>
    </div><br><br>
    <form action="/book-new-ticket" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog " style="max-width: 1206px; height: 717px;">
                <div class="modal-content" style="width: 100%; height: 100%;background-color: transparent; border: none">
                    <div class="modal-body">
                        <button type="button" data-bs-dismiss="modal" style="color: white; background-color: transparent; border: none; font-size: 2em">X</button>
                        <div class="Book_Ticket">Book Ticket</div>
                        <div class="Movie_Title">{{ $movie->Title }}</div>
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <img class="movie-cover" src="{{ asset('storage/' . $movie->Title . '/' . $movie->Cover) }}" />
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div class="rapih" style="display: flexbox; justify-content: center;">
                                <div style="display: flex; justify-content: space-around">
                                    <div class="theater-container">
                                        <div class="Theater"> Theater : </div>
                                        <div class="dropdown" id="dropdown-theater">
                                            <button class="btn btn-secondary dropdown-toggle button-choose-theater" style="z-index: 5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Choose Theater :
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 100">
                                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'Central Park Mall'; document.querySelector('.button-choose-theater').innerHTML = 'Central Park Mall'">Central Park Mall</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'Pacific Place'; document.querySelector('.button-choose-theater').innerHTML = 'Pacific Place'">Pacific Place</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'Paris Van Java'; document.querySelector('.button-choose-theater').innerHTML = 'Paris Van Java'">Paris Van Java</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'AEON Mall'; document.querySelector('.button-choose-theater').innerHTML = 'AEON Mall'">AEON Mall</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'Teraskota'; document.querySelector('.button-choose-theater').innerHTML = 'Teraskota'">Teraskota</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="time-container">
                                        <div class="Time"> Time : </div>
                                        <div class="dropdown" id="dropdown-time" >
                                            <button class="btn btn-secondary dropdown-toggle button-choose-time" type="button" style="z-index: 5" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                                                Choose Time :
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 110">
                                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('timeSelected').value = '12.00 WIB'; document.querySelector('.button-choose-time').innerHTML = '12.00 WIB'">12.00 WIB</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('timeSelected').value = '14.00 WIB'; document.querySelector('.button-choose-time').innerHTML = '14.00 WIB'">14.00 WIB</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('timeSelected').value = '16.00 WIB'; document.querySelector('.button-choose-time').innerHTML = '16.00 WIB'">16.00 WIB</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="document.getElementById('timeSelected').value = '18.00 WIB'; document.querySelector('.button-choose-time').innerHTML = '18.00 WIB'">18.00 WIB</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="Seat"> Seat : </div>
                                <div class="div-div-seat" style="display: flex;">
                                    <div class="div-seat">
                                        <div class="div-seat-row">
                                            <button class="seat-number">1</button>
                                            <button class="seat-number">2</button>
                                            <button class="seat-number">3</button>
                                            <button class="seat-number">4</button>
                                            <button class="seat-number">5</button>
                                            <button class="seat-number">6</button>
                                            <button class="seat-number">7</button>
                                            <button class="seat-number">8</button>
                                            <button class="seat-number">9</button>
                                            <button class="seat-number">10</button>
                                        </div>
                                        <div class="div-seat-row">
                                            <button class="seat-number">11</button>
                                            <button class="seat-number">12</button>
                                            <button class="seat-number">13</button>
                                            <button class="seat-number">14</button>
                                            <button class="seat-number">15</button>
                                            <button class="seat-number">16</button>
                                            <button class="seat-number">17</button>
                                            <button class="seat-number">18</button>
                                            <button class="seat-number">19</button>
                                            <button class="seat-number">20</button>
                                        </div>
                                        <div class="div-seat-row">
                                            <button class="seat-number">21</button>
                                            <button class="seat-number">22</button>
                                            <button class="seat-number">23</button>
                                            <button class="seat-number">24</button>
                                            <button class="seat-number">25</button>
                                            <button class="seat-number">26</button>
                                            <button class="seat-number">27</button>
                                            <button class="seat-number">28</button>
                                            <button class="seat-number">29</button>
                                            <button class="seat-number">30</button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="movieID" value="{{ $movie->MovieID }}">
                                <input type="hidden" id="timeSelected" name="BookingTime" value="">
                                <input type="hidden" id="theaterSelected" name="TheaterLocation">
                                <div style="display: flex;margin-top: 10px;">
                                    <input type="text" name="SeatNumber" id="input-seat-number" placeholder="input seat number">
                                </div>
                                <br>
                            </div>
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 50px;">
                            <button class="button-book">Book</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        const tf = document.querySelector('#input-seat-number');
        const buttons = document.querySelectorAll('.seat-number');
        buttons.forEach((btn)=>{
            btn.addEventListener('click', (e)=>{
                e.preventDefault();
                tf.setAttribute('value', btn.innerHTML);
            })
        })

        const buttonBook = document.querySelector('.button-book');
        const inputTime = document.getElementById('timeSelected');
        const inputTheater = document.getElementById('theaterSelected');
        buttonBook.addEventListener('click', ()=>{
            if(inputTime.value === "" || inputTheater.value === ""){
                alert('Time or Theater Must Be Selected')
            }
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <x-footer />
</body>

</html>