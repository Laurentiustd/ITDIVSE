<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384 EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite('resources/css/book-ticket.css')
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
                <div class="modal-content" style="width: 100%; height: 100%;">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="Book_Ticket">Book Ticket</div>
                        <div class="Movie_Title">{{ $movie->Title }}</div>
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <img class="movie-cover" src="{{ asset('storage/' . $movie->Title . '/' . $movie->Cover) }}" />
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div class="rapih" style="display: flexbox; justify-content: center;">
                                <div class="Theater"> Theater : </div>
                                <div class="dropdown" id="dropdown-theater">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Choose Theater :
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#" onclick="document.getElementById('theaterSelected').value = 'Jakarta'">Jakarta</a></li>
                                    </ul>
                                </div>
                                <div class="Time"> Time : </div>
                                <div class="dropdown" id="dropdown-time">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <div class="div-div-seat" style="display: flex;">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <x-footer />
</body>

</html>