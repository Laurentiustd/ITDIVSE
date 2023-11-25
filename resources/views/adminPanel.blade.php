<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/adminPanel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav>
        <x-navbar />
    </nav>

    <div>
        <form action="/add-movie" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Cover</label>
            <br>
            <input type="file" name="Cover" value="{{ old('Cover') }}">
            <br><br>

            <label for="">Genre Name</label>
            <br>
            <input type="text" name="GenreName" value="{{ old('GenreName') }}">
            <br><br>

            <label for="">Title</label>
            <br>
            <input type="text" name="Title" value="{{ old('Title') }}">
            <br><br>

            <label for="">Director</label>
            <br>
            <input type="text" name="Director" value="{{ old('Director') }}">
            <br><br>

            <label for="">Description</label>
            <br>
            <textarea name="Description" id="" cols="30" rows="10">{{ old('Description') }}</textarea>
            <br><br>

            <label for="">Duration</label>
            <br>
            <input type="number" name="Duration" value="{{ old('Duration') }}">
            <br><br>

            <label for="">Rating</label>
            <br>
            <input type="number" name="Rating" value="{{ old('Rating') }}">
            <br><br>

            <label for="">Release Date</label>
            <br>
            <input type="date" name="ReleaseDate" value="{{ old('ReleaseDate') }}">
            <br><br>

            <button type="submit" value="submit">Submit</button>
        </form>
    </div>

    <x-footer />
</body>
</html>