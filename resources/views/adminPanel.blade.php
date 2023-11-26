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
</head>

<body>
    <nav>
        <x-navbar />
    </nav>

    <div class="add">
        <button type="button" onclick="openAddPopUp()">Add Movie</button>
        <div class="addPopUp" id="addPopUp">
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

    <x-footer />
    <script src="js/adminPanel.js"></script>
</body>

</html>
