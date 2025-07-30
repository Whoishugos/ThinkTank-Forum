<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ThinkTank-Forum</title>

       @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    </head>
   <body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-danger">
  <div class="container flex justify-content-between">
    <a class="navbar-link" href="{{ route('home') }}">
        <img class="h-32px" src="{{ asset('images/thinktank-white.png') }}" alt="think-tank">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-0 mx-lg-3">
        <li class="nav-item d-block d-lg-none d-xl-block">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="">Discussions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" aria-current="page" href="">About Us</a>
        </li>

      </ul>
      <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="" method="GET">
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
                <img src="{{ asset('images/search-icon.png') }}" alt="search" class="h-32px">
            </span>
            <input class="form-control border-start-0 ps-0" type="search" placeholder="Search" aria-label="Search" name="" value="">
        </div>
      </form>
      <ul class="navbar-nav ms-auto my-2 my-lg-0">
        <li class="nav-item my-auto">
          <a class="nav-link text-nowrap" href="">Log In</a>
        </li>
        <li class="nav-item ps-1">
          <a class="btn btn-primary-white" href="">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="container hero">
    <div class="row align-items-center h-100">
        <div class="col-12 col-lg-6">
            <h1>Welcome to <br/>ThinkTank Community</h1>
            <p class="mb-4">Selamat datang di ThinkTank, ruang terbuka bagi para pemikir kritis, inovator, dan pembelajar untuk berdiskusi, berbagi ide, dan menciptakan solusi nyata.</p>
            <a class="btn btn-primary me-2 mb-2 mb-lg-0" href="">Sign Up</a>
            <a class="btn btn-secondary mb-2 mb-lg-0" href="">Join the Discussion</a>
    </div>
    <div class="col-12 col-lg-6 h-315px order-first order-lg-last mb-3 mb-lg-0">
        <img class="hero-image float-lg-end" src="{{ asset('images/hero-forum.png') }}" alt="">
    </div>
</section>
<section class="container min-h-372px">
    <div class="row">
        <div class="col-12 col-lg-4 text-center">
            <img class="promote-icon mb-2" src="{{ asset('images/discussions.png') }}" alt="Discussions">
            <h2>Discussions</h2>
            <p class="fs-3">5,1980</p>
        </div>
        <div class="col-12 col-lg-4 text-center">
            <img class="promote-icon mb-2" src="{{ asset('images/answers.png') }}" alt="Answers">
            <h2>Answers</h2>
            <p class="fs-3">5,1980</p>
        </div>
        <div class="col-12 col-lg-4 text-center">
            <img class="promote-icon mb-2" src="{{ asset('images/users.png') }}" alt="Users">
            <h2>Users</h2>
            <p class="fs-3">5,1980</p>
        </div>
    </div>
</section>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
