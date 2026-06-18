<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        
        <nav class="navbar">
            <a href="{{route('about')}}" class="active">About</a>
            <a href="https://drive.google.com/file/d/1dUM8utRZKXj3tRsrLjSnvwkSp-616Ugz/view?usp=sharing" target="_blank">Resume</a>
            <a href="{{route('contact')}}">Contact</a>
        </nav>
        <div class="content-about">
                    <div class="intro">
            <div class="introName">
                <h1>
                    Hi, I'm Vivian Michelle
                </h1>
            </div>
            <div class="introPosition">
                <h1>
                    QA Engineers <br>& Developer-in-Progress
                </h1>
            </div>
            <div class="introDesc">
                <p>
                    I test software for quality and I'm learning to code it too.
                </p>
            </div>
        </div>
        <div class="content">
            <div class="qaContent">
                <div class="qaImage"><img src="{{ asset('images/quality_analyst.jpeg') }}" alt="QA Image"></div>
                <div class="info">
                    <div class="infoTitle"><p>Quality Analyst</p></div>
                    <div class="qaInfo"><p>Dedicated to delivering reliable, user‑friendly software through thorough testing.</p></div>
                </div>
            </div>
            <div class="devContent">
                <div class="devImage"><img src="{{ asset('images/developer.jpg') }}" alt=""></div>
                <div class="info">
                    <div class="infoTitle"><p>Aspiring Coder</p></div>
                    <div class="devInfo"><p>Learning to develop modern web application and beyond.</p></div>
                </div>
            </div>
        </div>

        </div>
    </div>
</body>

</html>
