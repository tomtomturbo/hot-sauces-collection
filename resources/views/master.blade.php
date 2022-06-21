<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <img src= "/images/Inspectah-Spicy2.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="/test">Inspectah Spicy
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/collection">Collection</a>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <h1><a href="/test"></a></h1>
    
    <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="/images/Inspectah-Spicy2.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Discover the World of Hot Sauces</h1>
        <p class="lead">
        Welcome to our hot-sauce collection where you will find the finest sauces in the industry.
 These sauces are delicious, versatile and most definitely HOT!
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="/collection"> <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">See our Hotsauce Collection</button> </a>
        </div>
        <br>
          <p class="lead">We are two friends with a deep love for hot sauces. We love the way it makes our food taste and how it can make a bland dish so much more flavorful.
            Our collection of hot sauces stands for our  love for food, and an appreciation for all things spicy.
            We have been collecting hot sauces for years and have curated a collection of hot sauces because we believe that the best meals are prepared with love and that food should  be enjoyed together.
            We hope you will enjoy your meals and that you will share with your friends and family  </p>


      </div>
    </div>

    
          </div>
        </div>

      </div>

</body>

</html>
