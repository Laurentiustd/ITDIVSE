<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384 EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card" style="background-color: #f8cb68;">
            <div class="card-body row">
                <div class="col-md-3">
                    <img src="{{asset('assets/harrypotter.jpg')}}" alt="Harry Potter" class="img-fluid rounded">
                </div>
                <div class="col-md-9">
                    <h3 class="mb-3">Harry Potter and the Philosopher's Stone</h3>
                    <div>
                        <div class="row">
                            <div class="col-md-2">
                                <h6 class="text-muted mb-3">Genre</h6>
                                <h6 class="text-muted mb-3">Duration</h6>
                                <h6 class="text-muted mb-3">Cast</h6>
                                <h6 class="text-muted mb-3">Director</h6>
                                <h6 class="text-muted mb-3">Studio</h6>
                                <h6 class="text-muted mb-3">Rating</h6>
                                <h6 class="text-muted mb-3">Release Date</h6>
                                <h6 class="text-muted mb-1">Synopsis</h6>
                            </div>
                            <div class="col-md-9">
                                <h6 class="text-muted mb-3">: Magic</h6>
                                <h6 class="text-muted mb-3">: 210 Minutes</h6>
                                <h6 class="text-muted mb-3">: Daniel Radcliffe</h6>
                                <h6 class="text-muted mb-3">: Chris Columbus</h6>
                                <h6 class="text-muted mb-3">: Warner Bros</h6>
                                <h6 class="text-muted mb-3">: 10</h6>
                                <h6 class="text-muted mb-3">: 15/10/2001</h6>
                                <h6 class="text-muted">: Harry Potter, an eleven-year-old orphan, discovers that he is a wizard and is invited to study at Hogwarts. Even as he escapes a dreary life and enters a world of magic, he finds trouble awaiting him.</h6>
                            </div>
                        </div>
                    </div>
                    <button class="btn mt-1 w-100 p-3" style="background-color: #f29559; color:black;">Book Ticket</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
