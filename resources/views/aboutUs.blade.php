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
</head>

<body>
    <x-navbar />

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

    <x-footer />
     <script>
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
