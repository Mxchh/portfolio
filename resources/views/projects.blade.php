<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('projects') }}" class="active">Projects</a>
            <a href="https://drive.google.com/file/d/1dUM8utRZKXj3tRsrLjSnvwkSp-616Ugz/view?usp=sharing" target="_blank" rel="noopener noreferrer">Resume</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <main class="projects-section">
            <h2>Projects</h2>
            <p class="projects-intro">A few things I’m building and learning along the way.</p>
            <div class="project-grid">
                <article class="project-card">
                    <span class="project-tag">Laravel · Blade · CSS</span>
                    <h3>Personal Portfolio</h3>
                    <p>A responsive portfolio built with Laravel Blade and CSS, sharing my projects and web development learning journey.</p>
                    <a href="{{ route('about') }}">View this site <span aria-hidden="true">↗</span></a>
                </article>
                <article class="project-card project-card-next">
                    <span class="project-tag">In progress · React · TypeScript · Laravel</span>
                    <h3>Journal App</h3>
                    <p>A personal journaling app with journal entries, mood tracking, streaks, and statistics. I’m building the React frontend and Laravel API.</p>
                    <a href="https://github.com/Mxchh/journal-frontend" target="_blank" rel="noopener noreferrer">View source on GitHub <span aria-hidden="true">↗</span></a>
                </article>
            </div>
        </main>
    </div>
</body>

</html>
