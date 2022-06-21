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
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="/images/Inspectah-Spicy2.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#">Inspectah Spicy
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <h1 class="title">Collection</h1>


    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/cholula.jpeg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy="3em"></text></svg>

                        <div class="card-body">
                            <h5 class="card-title">CHOLULA HOT SAUCE</h5>

                            <p class="card-text">Cholula stands for authentic Mexican cuisine, heritage, and culture. Our premium blend makes every meal delicioso!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                                <small class="text-muted">heat-index: 2 of 10</small>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/gringo-hot-sauce.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

                        <div class="card-body">
                            <h5 class="card-title">GRINGO BANDITO HOT SAUCE</h5>

                            <p class="card-text">The original Gringo Bandito is a real trap !
                                Once experienced, this 100% natural and untreated hot sauce will become an addiction.
                                With its unusual taste, this chili sauce helps make your simplest dishes delicious.
                                Imported from the US, the Original Gringo Bandito Hot Sauce deserves a central place on your spice shelf.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                                <small class="text-muted">heat-index: 4 of 10</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/marie-sharps-belizean-heat.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

                        <div class="card-body">
                            <h5 class="card-title">MARIE SHARPS BELIZEAN HOT SAUCE</h5>

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                                <small class="text-muted">heat-index: 6 of 10</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/hellfire-chocolate-cherry-hell.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

                        <div class="card-body">
                            <h5 class="card-title">HELLFIRE CHOCOLATE CHERRY HELL</h5>

                            <p class="card-text">A sweet and surprising mix of cherry, chocolate and bourbon, as well as plums, blueberries and honey, like a good warm cake coming out of the oven in the middle of winter. And then, Boom!
                                Chocolate Habanero pepper to enhance the strength of this Chocolate Cherry Hell sauce.
                                Imagine a good brownie, dark chocolate icing mixed with a teaspoon of this Hellfire bottle. I’m dying because it’s so intoxicating and orgasmic!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                                <small class="text-muted">heat-index: 6 of 10</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/mad-dog-reaper-sriracha-sauce.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

                        <div class="card-body">
                            <h5 class="card-title">MAD DOG REAPER SRIRACHA SAUCE</h5>

                            <p class="card-text">The Mad Dog 357 Reaper Sriracha sauce is a hot sauce that belong to the family of “sriracha” sauces. Prepared with mashed Jalapeno, Cayenne pepper and Carolina Reaper (just to remind you who’s boss !), fruity and powerful, this sauce without adding of capsaicin, fits easily into the category of strong hot sauces because it reaches the 100,000 scovilles units.
                                This sriracha, 100% natural and made in the USA, will bring you a new vision on this type of spicy sauces that fit perfectly with Asian and American recipes.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                                <small class="text-muted">heat-index: 7 of 10</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/hot-high-mango.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

                        <div class="card-body">
                            <h5 class="card-title">HOT + HIGH MANGO </h5>

                            <p class="card-text">
                                “HOT+HIGH Mango features a nice creamy taste with a kick that ads beautifully to your chicken strips, fish marinade or salad dressing. You’re in for a spicy, herbally and fruity adventure that your taste buds will love.”</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                                <small class="text-muted">heat-index: 1 of 10</small>
                            </div>
                        </div>
                    </div>
                </div>
                <small class="text-muted">9 mins</small>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>


</body>

</html>