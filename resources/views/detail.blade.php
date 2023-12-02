<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384 EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #f2d492">
    <nav>
        <x-navbar />
    </nav>
    <div class="container mt-5">
        <div class="card" style="background-color: #f8cb68;">
            <div class="card-body row">
                <div class="col-md-3">
                    <img src="{{ asset('storage/' . $movie->Title . '/' . $movie->Cover) }}"
                        class="card-img-top rounded" alt="" style="width: 97%">
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
                    <button class="btn mt-1 w-100 p-3" style="background-color: #f29559; color:black;">Book
                        Ticket
                    </button>
                </div>
            </div>
        </div>
    </div><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <x-footer />
</body>

</html>
