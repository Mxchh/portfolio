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
            <a href="{{ route('projects') }}">Projects</a>
            <a href="https://drive.google.com/file/d/1ueNxgufJB1dn8mJwwOSbuAqQNs8DSb8D/view?usp=drive_link" target="_blank" rel="noopener noreferrer">Resume</a>
            <a href="{{route('contact')}}">Contact</a>
        </nav>
        <div class="content-about">
                    <div class="intro">
                    <p class="intro-eyebrow">LEARNING WEB DEVELOPMENT · BUILDING PROJECTS</p>
                    <div class="introName">
                <h1>
                    Hi, I'm Vivian Michelle Anak Jelma
                </h1>
            </div>
            <div class="introPosition">
                <h2>Aspiring web developer</h2>
            </div>
            <div class="introDesc">
                <p>
                    I’m currently focused on learning Laravel, React, TypeScript (TSX), HTML, and CSS by building hands-on projects.
                </p>
            </div>
            <a class="hero-link" href="{{ route('projects') }}">Explore my projects</a>
        </div>
        <div class="content">
            <div class="devContent">
                <div class="devImage"><img src="{{ asset('images/developer.jpg') }}" alt="Illustration of a developer working at a computer"></div>
                <div class="info">
                    <div class="infoTitle"><p>Learning by building</p></div>
                    <div class="devInfo"><p>I’m developing practical projects as I grow my skills in Laravel, React, TypeScript (TSX), HTML, and CSS.</p></div>
                </div>
            </div>
        </div>

        <section class="qa-background" aria-labelledby="qa-background-title">
            <p class="intro-eyebrow">ADDITIONAL EXPERIENCE</p>
            <h2 id="qa-background-title">My QA background</h2>
            <p class="qa-background-intro">I bring a quality-focused mindset to development, backed by experience testing APIs, checking data, and working through issues with developers.</p>
            <div class="qa-background-grid">
                <article>
                    <h3>Test cases &amp; APIs</h3>
                    <p>I create test cases and use Postman to check API requests, responses, and edge cases.</p>
                </article>
                <article>
                    <h3>Database checks</h3>
                    <p>I use TablePlus to verify that application data is stored and updated as expected.</p>
                </article>
                <article>
                    <h3>Team collaboration</h3>
                    <p>I share clear, reproducible bug reports and work with developers to retest fixes.</p>
                </article>
                <article>
                    <h3>AI-assisted coverage</h3>
                    <p>I use my AI QA bot to suggest extra scenarios, then verify its suggestions against the app.</p>
                </article>
            </div>
        </section>

        </div>
    </div>
</body>

</html>
