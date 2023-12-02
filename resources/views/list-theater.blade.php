<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/list.css')}}">
    <script src="{{asset('js/list.js')}}"></script>
    <title>List Theater</title>
</head>

<body>
<!-- Nav -->
    <!-- Locations  -->
    <div id="locations">
        <x-navbar/>
        <div class="navy">
        </div>
        <div class="btncontainer">
            <div class="buttonloc">
                <a href="#" class="btn active" id="jktbtn" onclick="showContainer('Jakarta')">Jakarta</a>
                <a href="#" class="btn" id="bdgbtn" onclick="showContainer('Bandung')">Bandung</a>
                <a href="#" class="btn" id="tgrbtn" onclick="showContainer('Tangerang')">Tangerang</a>
            </div>
        </div>
        <div class="container" id="Jakarta">
            <h1>Cinemas</h1>
            <div class="locationsCard">
                <img src="{{asset('assets/centralpark.jpeg')}}" alt="">
                <div class="cardDesc">
                    <div class="cardTitle">
                        <h1>Central Park Mall</h1>
                        <h2> Central Park Mall, West Jakarta</h2>
                    </div>
                    <p>Welcome to "Central Park Cinémathèque," the very first theater nestled
                        within the heart of Central Park Mall in Jakarta, a cinematic haven that
                        seamlessly blends luxury, innovation, and a touch of nostalgia. As you step
                        through the grand entrance, you are transported into a world where the magic of
                        cinema comes to life in a setting of unparalleled elegance.</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6509649303043!2d106.78680263810764!3d-6.1774561801756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6f4f5882f1b%3A0xce6dfefdcd89330f!2sCGV%20Cinemas!5e0!3m2!1sen!2sid!4v1700981739798!5m2!1sen!2sid"></iframe>
                </div>
            </div>
            <div class="locationsCard">
                <img src="{{asset('assets/pacificplace.webp')}}" alt="">
                <div class="cardDesc">
                    <div class="cardTitle">
                        <h1>Pacific Place</h1>
                        <h2>Senayan, Kebayoran Baru, South Jakarta City, Jakarta</h2>
                    </div>
                    <p>Introducing "Pacific Horizon Theatres," the second jewel in the crown of cinematic
                        excellence at Pacific Place Mall in Jakarta. As a testament to innovation and
                        modernity, Pacific Horizon Theatres offers a contemporary and immersive
                        movie-going experience that captivates audiences from the moment they enter.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2968941220006!2d106.80725477499043!3d-6.224528893763516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15118489f13%3A0xee3fd752bf024504!2sCGV%20Cinemas%20Pacific%20Place!5e0!3m2!1sen!2sid!4v1700981129139!5m2!1sen!2sid"> </iframe>
                </div>
            </div>
        </div>

        <div class="container hidden" id="Bandung">
            <h1>Cinemas</h1>
            <div class="locationsCard">
                <img src="{{asset('assets/parisvanjava.webp')}}" alt="">
                <div class="cardDesc">
                    <div class="cardTitle">
                        <h1>Paris Van Java</h1>
                        <h2>Cipedes, Bandung, West Java</h2>
                    </div>
                    <p>Welcome to "Pacific Vista Cinemas," the third jewel in the cinematic crown,
                        nestled within the cultural heart of Bandung at Pacific Place. This avant-garde
                        theater invites you to embark on a cinematic journey where elegance meets artistic
                        expression, creating an immersive and sophisticated experience for movie enthusiasts.</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31688.101396259422!2d107.56515089264265!3d-6.8890845953101785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6603f408a09%3A0xb0506a362a7810b2!2sParis%20Van%20Java%20Mall!5e0!3m2!1sen!2sid!4v1700982251154!5m2!1sen!2sid"></iframe>
                    </div>
            </div>
        </div>

        <div class="container hidden" id="Tangerang">
            <h1>Cinemas</h1>
            <div class="locationsCard">
                <img src="{{asset('assets/aeon.jpg')}}" alt="">
                <div class="cardDesc">
                    <div class="cardTitle">
                        <h1>AEON Mall</h1>
                        <h2> Aeon Mall BSD, Tangerang</h2>
                    </div>
                    <p>Welcome to "Aeon Starlight Cinemas," the fourth jewel in the cinematic galaxy,
                        gracefully situated within the vibrant AEON Mall in BSD. This cutting-edge
                        theater invites moviegoers to embark on an extraordinary cinematic odyssey,
                        blending futuristic aesthetics with unparalleled comfort for an unforgettable
                        movie-watching experience..</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7447.028787424186!2d106.6419872725692!3d-6.303625781638663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb4cdb86c07b%3A0xcdf5c0a3abb8a5b1!2sAEON%20MALL%20BSD%20CITY%20XXI!5e0!3m2!1sen!2sid!4v1700982519893!5m2!1sen!2sid"></iframe>
                </div>
            </div>
            <div class="locationsCard">
                <img src="{{asset('assets/teraskota.jpeg')}}" alt="">
                <div class="cardDesc">
                    <div class="cardTitle">
                        <h1>Teras Kota</h1>
                        <h2>BSD City, Tangerang</h2>
                    </div>
                    <p>Welcome to "Teraskota Grand Cinémathèque," the fourth cinematic gem nestled
                    within the bustling heart of Teraskota BSD. This extraordinary theater invites
                    movie aficionados to step into a world where timeless elegance meets modern innovation,
                    offering an unparalleled movie-watching experience in a setting that exudes sophistication
                    and cultural charm.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2472.1700287267367!2d106.66608473871366!3d-6.295685920363446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb2faab0472b%3A0xfdf6ee99c108d53e!2sCGV%20TerasKota%20BSD!5e0!3m2!1sen!2sid!4v1700982912259!5m2!1sen!2sid"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
   <x-footer/>
</body>

</html>
