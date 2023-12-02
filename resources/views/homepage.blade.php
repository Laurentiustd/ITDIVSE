<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: #f2d492">
    <nav>
        <x-navbar />
    </nav>
    <div class="container mt-5">
        <div class="card justify-content-center" style="background-color: #f8cb68; width: 100%">
            <div class="card-body">
                <h3 class="text-center mb-4">Now Playing</h3>
                <div class="card" style="background-color: #f29559">
                    <div class="d-flex flex-wrap">
                        @forelse ($nowMovies  as $movie)
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
                            </div>
                        @empty
                            <h5 class="mx-4 mt-3">Empty</h5>
                        @endforelse
                    </div>
                </div>
                <div class="container-fluid mt-5 d-flex justify-content-center">
                    {{ $nowMovies->onEachSide(1)->render() }}
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
                        @forelse ($upcomingMovies  as $movie)
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
                            </div>
                        @empty
                            <h5 class="mx-4 mt-3">Empty</h5>
                        @endforelse
                    </div>
                </div>
                <div class="container-fluid mt-5 d-flex justify-content-center">
                    {{ $upcomingMovies->render() }}
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
