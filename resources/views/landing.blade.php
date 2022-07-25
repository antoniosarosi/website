<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite([
      'resources/css/app.css', 
      'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
      'resources/js/app.js'
    ])

    <title>Antonio Sarosi</title>


  </head>
  <body>
    <header>
      <a href="#" class="brand">Antonio Sarosi</a>
      <div class="menu">
        <div class="btn">
          <i class="fa-solid fa-x close-btn"></i>
        </div>
        <a href="https://www.youtube.com/antoniosarosi">
          <i class="fa-brands fa-youtube"></i> Youtube
        </a>
        <a href="https://github.com/antoniosarosi">
          <i class="fa-brands fa-github"></i> Github
        </a>
        <a href="https://www.instagram.com/antoniosarosi/">
          <i class="fa-brands fa-instagram"></i> Instagram
        </a>
        <a href="https://twitter.com/antoniosarosi/">
          <i class="fa-brands fa-twitter"></i> Twitter
        </a>
        <a href="https://discord.com/invite/bHPnUr7">
          <i class="fa-brands fa-discord"></i> Discord
        </a>
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
    </header>

    <section class="hero">
      <div class="hero-text">
        <h1>Antonio Sarosi</h1>
        <h2>Software development and content creation</h2>
        <div class="social-networks-links">
          <a href="https://www.youtube.com/antoniosarosi"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://github.com/antoniosarosi"><i class="fa-brands fa-github"></i></a>
          <a href="https://www.instagram.com/antoniosarosi/"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://twitter.com/antoniosarosi/"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://discord.com/invite/bHPnUr7"><i class="fa-brands fa-discord"></i></a>
        </div>
      </div>
        <a href="#projects">
          <div class="scroll-down"></div>
        </a>
    </section>

    <section class="projects-section" id="projects">
      <h2>
        <a href="https://github.com/antoniosarosi">
          <i class="fa-brands fa-github"></i>
        </a>
        Github Projects
      </h2>
      @foreach ($repositories->sortByDesc('stars') as $repository)
        <h3>
          <a href="{{ $repository->url }}">{{ $repository->name }}</a>
          <br>
          <i class="fa-solid fa-star"></i> {{ $repository->stars }}
          <i class="fa-solid fa-code-fork"></i> {{ $repository->forks }}
        </h3>
        @if ($repository->language)
          <h4>Language: <span class="language">{{ $repository->language }}</span></h4>
        @endif
        <p>{{ $repository->description ?? "This project has no description" }}</p>
      @endforeach
    </section>
  </body>
</html>
