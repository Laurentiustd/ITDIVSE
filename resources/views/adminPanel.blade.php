<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/adminPanel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <nav>
        <x-navbar />
    </nav>

    <div class="add">
        <button type="button" onclick="openAddPopUp()">Add Movie</button>
        <div class="addPopUp" id="addPopUp">
            <div class="closeButton">
                <i data-feather="x-circle" class="closeButtonIcon" onclick="closeAddPopUp()"></i>
            </div>
            <h1>Add Movie</h1>
            <form action="/add-movie" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                @csrf
                <div class="addPopUpInput">
                    <div class="leftAddPopUp">
                        <div>
                            <label for="Cover">Cover</label>
                            <input type="file" id="Cover" name="Cover" value="{{ old('Cover') }}">
                            <span id="errorMessage1" style="color: red;"></span>
                        </div>
                        <div>
                            <label for="">Genre Name</label>
                            <input type="text" name="GenreName" value="{{ old('GenreName') }}">
                            <span id="errorMessage2" style="color: red;"></span>
                        </div>
                        <div>
                            <label for="">Title</label>
                            <input type="text" name="Title" value="{{ old('Title') }}">
                            <span id="errorMessage3" style="color: red;"></span>
                        </div>
                        <div>
                            <label for="">Director</label>
                            <input type="text" name="Director" value="{{ old('Director') }}">
                            <span id="errorMessage4" style="color: red;"></span>
                        </div>
                        <div>
                            <label for="">Duration</label>
                            <input type="number" name="Duration" value="{{ old('Duration') }}">
                            <span id="errorMessage5" style="color: red;"></span>
                        </div>
                        <div>
                            <label for="">Rating</label>
                            <input type="number" name="Rating" value="{{ old('Rating') }}">
                            <span id="errorMessage6" style="color: red;"></span>
                        </div>
                    </div>

                    <div class="rightAddPopUp">
                        <div>
                            <label for="">Description</label>
                            <textarea name="Description" id="" cols="30" rows="12">{{ old('Description') }}</textarea>
                            <span id="errorMessage7" style="color: red;"></span>
                        </div>
                        <div>
                            <label for="">Release Date</label>
                            <input type="date" name="ReleaseDate" value="{{ old('ReleaseDate') }}">
                            <span id="errorMessage8" style="color: red;"></span>
                        </div>
                    </div>
                </div>

                <div class="button">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="overlay" id="overlay" onclick="closeAddPopUp()"></div>
    </div>

    <div class="container mt-5">
        <div class="card justify-content-center" style="background-color: #f8cb68; width: 100%">
            <div class="card-body">
                <h3 class="text-center mb-4">Now Playing</h3>
                <div class="card" style="background-color: #f29559">
                    <div class="d-flex flex-wrap">
                        @forelse ($movies as $movie)
                            <div class="card m-3 rounded-3"
                                style="width: 17.3%; background-color: #f29559; border: none;">
                                <a href="{{ route('detail', $movie->MovieID) }}"
                                    style="text-decoration: none; color: black">
                                    <img src="{{ asset('storage/' . $movie->Title . '/' . $movie->Cover) }}"
                                        class="card-img-top rounded" alt="" style="width: 100%">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $movie->Title }}</h5>
                                    </div>
                                </a>
                                <div class="buttons-container">
                                    <button type="button" class="edit-btn"><a href="/edit-movie/{{$movie->MovieID}}">Edit</a></button>
                                    <button type="button" class="delete-btn"><a href="/delete-movie/{{$movie->MovieID}}">Delete</a></button>
                                </div>
                            </div>
                        @empty
                            <h5 class="mx-4 mt-3">Empty</h5>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <div class="card" style="background-color: #f8cb68">
            <div class="card-body">
                <h3 class="text-center mb-4">Up Coming</h3>
                <div class="card" style="background-color: #f29559">
                    <div class="d-flex flex-wrap">
                        @forelse ($movies as $movie)
                            <div class="card m-3 rounded-3"
                                style="width: 17.3%; background-color: #f29559; border: none;">
                                <a href="{{ route('detail', $movie->MovieID) }}"
                                    style="text-decoration: none; color: black">
                                    <img src="{{ asset('storage/' . $movie->Title . '/' . $movie->Cover) }}"
                                        class="card-img-top rounded" alt="" style="width: 100%">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $movie->Title }}</h5>
                                    </div>
                                </a>
                                <div class="buttons-container">
                                    <button type="button" class="edit-btn"><a href="/edit-movie/{{$movie->MovieID}}">Edit</a></button>
                                    <button type="button" class="delete-btn"><a onclick="openModal({{$movie->MovieID}})">Delete</a></button>
                                </div>
                            </div>
                        @empty
                            <h5 class="mx-4 mt-3">Empty</h5>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>

    <div class="delete-popup">
        <div class="delete-container">
            <h1>CONFIRMATION</h1>
            <div class="contents">
                <p>Are you sure? <br>Because this action is <span>irreversible</span></p>
                <div class="buttons">
                    <button class="cancel">Cancel</button>
                    <form action="" method="POST">
                        @csrf
                        @method('delete')
                        <button class="delete">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
    <script>
        feather.replace()
    </script>
    <script src="js/adminPanel.js"></script>
</body>

</html>
