<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Plus+Jakarta+Sans:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container-navbar {
            display: flex;
            padding: 1em;
            justify-content: space-between;
            align-items: center;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .container-navbar .links {
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
            border-radius: 10px;
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

            .container-navbar h1{
            display: block;
            font-size: 2em;
            margin-top: 0.67em;
            margin-bottom: 0.67em;
            margin-left: 0;
            margin-right: 0;
            font-weight: bold;
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
                z-index: 10;
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
</body>
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
</script>
</html>
