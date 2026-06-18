<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <a href="{{route('about')}}">About</a>
            <a href="https://drive.google.com/file/d/1dUM8utRZKXj3tRsrLjSnvwkSp-616Ugz/view?usp=sharing" target="_blank">Resume</a>
            <a href="{{route('contact')}}" class="active">Contact</a>
            <div class="projects">
        </nav>

        <section class="contact-section">
            <h2>Contact Information</h2>
            <div class="contact-info">
                <p><strong>Email:</strong> <a href="mailto:vivianmichelle61@yahoo.com">vivianmichelle61@yahoo.com</a></p>
                <p><strong>WhatsApp:</strong> <a href="https://wa.me/60162521908" target="_blank">+60 16‑252 1908</a></p>
                <p><strong>Location:</strong> Kuching, Sarawak, Malaysia</p>
            </div>
        </section>
    </div>
</body>

</html>
