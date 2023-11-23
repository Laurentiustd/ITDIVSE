<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384 EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card" style="background-color: #f8cb68">
            <div class="card-body">
                <h3 class="text-center mb-4">Now Playing</h3>
                <div class="card" style="background-color: #f29559">
                    <div class="d-flex flex-wrap">
                        <div class="card m-3 rounded-3" style="width: 15rem; background-color: #f29559; border: none">
                            <a href="detail" style="text-decoration: none; color:black">
                                <img src="{{asset('assets/harrypotter.jpg')}}" class="card-img-top rounded" alt="Harry Potter" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title">Harry Potter and the Philosopher's Stone</h5>
                                </div>
                            </a>
                        </div>

                        <div class="card m-3 rounded-3" style="width: 15rem; background-color: #f29559; border: none">
                            <a href="detail" style="text-decoration: none; color:black">
                                <img src="{{asset('assets/harrypotter.jpg')}}" class="card-img-top rounded" alt="Harry Potter" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title">Harry Potter and the Philosopher's Stone</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="d-flex flex-wrap" style="background-color: #f29559">
                        <div class="card m-3 rounded-3" style="width: 15rem; background-color: #f29559; border: none">
                            <a href="detail" style="text-decoration: none; color:black">
                                <img src="{{asset('assets/harrypotter.jpg')}}" class="card-img-top rounded" alt="Harry Potter" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title">Harry Potter and the Philosopher's Stone</h5>
                                </div>
                            </a>
                        </div>

                        <div class="card m-3 rounded-3" style="width: 15rem; background-color: #f29559; border: none">
                            <a href="detail" style="text-decoration: none; color:black">
                                <img src="{{asset('assets/harrypotter.jpg')}}" class="card-img-top rounded" alt="Harry Potter" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title">Harry Potter and the Philosopher's Stone</h5>
                                </div>
                            </a>
                        </div>
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
                        <div class="card m-3 rounded-3" style="width: 15rem; background-color: #f29559; border: none">
                            <a href="" style="text-decoration: none; color:black">
                                <img src="{{asset('assets/harrypotter.jpg')}}" class="card-img-top rounded" alt="Harry Potter" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title">Harry Potter and the Philosopher's Stone</h5>
                                </div>
                            </a>
                        </div>

                        <div class="card m-3 rounded-3" style="width: 15rem; background-color: #f29559; border: none">
                            <a href="" style="text-decoration: none; color:black">
                                <img src="{{asset('assets/harrypotter.jpg')}}" class="card-img-top rounded" alt="Harry Potter" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title">Harry Potter and the Philosopher's Stone</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="d-flex flex-wrap" style="background-color: #f29559">
                        <div class="card m-3 rounded-3" style="width: 15rem; background-color: #f29559; border: none">
                            <a href="" style="text-decoration: none; color:black">
                                <img src="{{asset('assets/harrypotter.jpg')}}" class="card-img-top rounded" alt="Harry Potter" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title">Harry Potter and the Philosopher's Stone</h5>
                                </div>
                            </a>
                        </div>

                        <div class="card m-3 rounded-3" style="width: 15rem; background-color: #f29559; border: none">
                            <a href="" style="text-decoration: none; color:black">
                                <img src="{{asset('assets/harrypotter.jpg')}}" class="card-img-top rounded" alt="Harry Potter" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title">Harry Potter and the Philosopher's Stone</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
