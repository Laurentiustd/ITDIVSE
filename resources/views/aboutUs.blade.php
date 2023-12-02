<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    @vite('resources/css/aboutUs.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Plus+Jakarta+Sans:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container-navbar {
            /* border: 2px solid red; */
            display: flex;
            padding: 1em;
            justify-content: space-between;
            align-items: center;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .container-navbar .links {
            /* border: 2px solid red; */
            display: flex;
            gap: 10em;
            padding: 1em;
            align-items: center;
        }

        .container-navbar .links ul {
            display: flex;
            list-style-type: none;
            gap: 2em;
        }

        .container-navbar .links ul li a {
            text-decoration: none;
            color: inherit;
            font-size: 1.2em;
        }

        .container-navbar .buttons {
            display: flex;
            gap: 1.2em;
        }

        .container-navbar .buttons button {
            padding: .5em 1.2em;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: 1.2em;
        }

        .container-navbar .buttons button a {
            text-decoration: none;
            color: inherit
        }

        .container-navbar .buttons button:hover {
            cursor: pointer;
        }

        .container-navbar .buttons .login,
        .container-navbar .buttons .username {
            background-color: #192630;
            color: #F8CB68;
        }

        .container-navbar .buttons .register {
            background-color: #F8CB68;
            color: #192630;
        }

        .container-navbar i {
            font-size: 2em;
            display: none;
        }

        .container-navbar .links .buttons .dropdown-menu {
            position: absolute;
            border: 1px solid grey;
            display: none;
            background-color: whitesmoke;
            padding: .5em;
            border-radius: 10px
        }

        .container-navbar .links .buttons .dropdown-menu.show{
            display: block;
        }

        .container-navbar .links.show {
            transform: translateX(0);
            transition: .3s;
        }

        .container-footer {
            background-color: #B9B08D;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3em 2em;
            gap: 1em;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .container-footer .icon-links {
            display: flex;
            gap: 1em;
            justify-content: center;
        }

        .container-footer .icon-links a img {
            width: 3em;
            height: 3em;
        }

        .container-footer hr {
            border: 1px solid black;
            width: 50em;
        }

        .container-footer p {
            font-size: 1em;
        }

        .container-footer p span {
            font-weight: bold;
        }

        @media screen and (max-width: 1024px) {
            .container-navbar h1 {
                font-size: 1.4em;
            }

            .container-navbar .links {
                gap: 5em;
            }

            .container-navbar .links {
                font-size: .8em;
            }

            .container-footer .icon-links a img {
                width: 2em;
                height: 2em;
            }

            .container-footer p {
                font-size: 0.8em;
            }
        }

        @media screen and (max-width: 768px) {
            .container-navbar .links {
                gap: 2em;
                flex-direction: column;
                position: absolute;
                top: 0;
                right: 0;
                margin-top: 5em;
                width: 100vw;
                background-color: whitesmoke;
                align-items: start;
                transform: translateX(100%);
                transition: .3s;
                height: 20em;
            }

            .container-navbar .buttons .username{
                display: none;
            }

            .container-navbar .links .buttons .dropdown-menu{
                display: block;
                padding: 0;
                border: none;
                margin-top: 1em;
            }

            .container-navbar .links ul {
                flex-direction: column;
                /* border: 2px solid red; */
            }

            .container-navbar .links {
                font-size: .8em;
            }

            .container-navbar i {
                display: block;
            }

            .container-navbar .buttons {
                flex-direction: column;
            }

            .container-footer .icon-links a img {
                width: 1.5em;
                height: 1.5em;
            }

            .container-footer p {
                font-size: 0.7em;
            }
        }
    </style>
</head>

<body>
    <div class="container-navbar">
        <h1>CinephileSafari</h1>
        <div class="links">
            <ul>
                <li><a href="">Our Theaters</a></li>
                <li><a href="">About Us</a></li>
                @if (Auth::user())
                    <li><a href="">Booked Ticket</a></li>
                @endif
            </ul>
            <div class="buttons">
                @if (Auth::user())
                    <div class="dropdown">
                        <button class="username"><a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                John Doe</a></button>
                        <ul class="dropdown-menu">
                            <form action="/logout" method="POST">
                                @csrf
                                <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </form>
                        </ul>
                    </div>
                @else
                    <button class="login"><a href="/login">Login</a></button>
                    <button class="register"><a href="/register">Register</a></button>
                @endif
            </div>
        </div>
        <i class="fa fa-bars" id="hamburgerIcon"></i>
    </div>

    <div class="container-about-us">
        <div class="story">
            <div class="texts">
                <h1>Our <span>Story</span></h1>
                <p>CinephileSafari was born out of a shared love for storytelling, visual artistry, and the powerful
                    impact of cinema on our lives. Our journey began with a simple belief: that the joy of watching a
                    film is not just a pastime but an adventure that transcends borders and cultures. We set out on a
                    cinematic safari, traversing the vast landscape of movies from around the globe to curate a diverse
                    and captivating selection for our audience.</p>
            </div>
            <img src="{{ asset('assets/about-us/popcorn.png') }}" alt="img">
        </div>
        <div class="mission">
            <div class="texts">
                <h1>Our <span>Mission</span></h1>
                <p>At CinephileSafari, our mission is to transport you to new worlds, elicit emotions, and spark
                    conversations through the universal language of film. We are committed to providing a platform for
                    both mainstream and independent cinema, celebrating the rich tapestry of stories that make us laugh,
                    cry, and reflect on the beauty of the human experience.</p>
            </div>
            <img src="{{ asset('assets/about-us/gocinema.png') }}" alt="img">
        </div>
        <div class="contacts">
            <div class="inputs">
                <h1>Contact <span>Us</span></h1>
                <div class="name">
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="email">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="message">
                    <label for="message">Message</label><br>
                    <textarea name="message" id="message" cols="40" rows="10" required></textarea>
                </div>
                <button>Submit</button>
            </div>
            <div class="maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.820455399773!2d106.783013!3d-6.203538!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6c4a8e09f5d%3A0x29720d62d8b976c5!2sBina%20Nusantara%20Computer%20Club!5e0!3m2!1sid!2sid!4v1700739291033!5m2!1sid!2sid"
                    width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <div class="container-footer">
        <div class="icon-links">
            <a href=""><img src="{{ asset('assets/twitter-icon.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('assets/instagram-icon.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('assets/facebook-icon.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('assets/youtube-icon.png') }}" alt=""></a>
        </div>
        <hr>
        <p>All Right Reserved <span>CinephileSafari© 2023</span></p>
    </div>
     <script>
        const hamburgerBars = document.getElementById('hamburgerIcon');
        const links = document.querySelector('.container-navbar .links');

        hamburgerBars.addEventListener('click', () => {
            links.classList.toggle('show')
        })

        const dropdownBTN = document.querySelector('.container-navbar .username')
        const dropdownMenu = document.querySelector('.container-navbar .links .buttons .dropdown-menu')

        dropdownBTN.addEventListener('click', ()=>{
            dropdownMenu.classList.toggle('show')
        })

        const submitBTN = document.querySelector('.container-about-us .contacts .inputs button')
        const nameInput = document.querySelector('.container-about-us .contacts .inputs .name input')
        const emailInput = document.querySelector('.container-about-us .contacts .inputs .email input')
        const messageInput = document.querySelector('.container-about-us .contacts .inputs .message textarea')
        submitBTN.addEventListener('click', ()=>{
            if(nameInput.value === '' || emailInput.value === '' || messageInput.value === ''){
                alert('Please Input Required Fields')
            }else{
                alert('Thank you for submitting!!')
            }
        })
    </script>
</body>

</html>
