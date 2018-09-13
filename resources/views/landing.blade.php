<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Pawtastic</title>
</head>
<body>
<div class="main-page-wrapper">
    <div class="container-fluid first-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-6  col-sm-12">
                    <div class="row logo">
                        <img src="{{ asset('/img/8-layers.svg') }}" alt="logo" class="logo">
                    </div>
                </div>
                <div class="col-md-6  col-sm-12">
                    <div class="row links">
                        <div class="d-inline"><a href="">About</a></div>
                        <div class="d-inline"><a href="">Reviews</a></div>
                        <div class="d-inline"><a href="">Services</a></div>
                        <div class="d-inline"><a href="">Sign Up</a></div>
                    </div>
                    <h1 class="base-headline">We care for your furry little loved ones while you’re away</h1>
                    <button class="signup-format" onclick="location.href='/pets'">Sign Up</button>

                </div>
            </div>
        </div>
        <div class="row tag">
            <span>Ozzie in Brooklyn</span>
        </div>
    </div>

    <div class="container-fluid second-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-6  col-sm-12">
                    <h1 class="base-headline">Expert care for your furry, feathery, or scaley friend</h1>
                    <p class="base-text">
                        We know how stressful it is to leave your pets at home alone. We’re a team of
                        experienced animal caregivers, well connected to local veterinarians.
                        Trust to us to love them like our own, and to keep them safe and happy till you’re home.
                    </p>
                    <button class="signup-format" onclick="location.href='/pets'">Sign Up</button>
                </div>
                <div class="col-md-6 col-sm-12 collage">
                    <img src="{{ asset('img/cat-small.png') }}" alt="cat" class="rounded">
                    <img src="{{ asset('img/bird-small.png') }}" alt="bird">
                    <img src="{{ asset('img/dog-small.png') }}" alt="dog">
                    <img src="{{ asset('img/hamster-small.png') }}" alt="hamster">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid third-panel">
            <div class="row">
                <div class="col-md-6  col-sm-12 side-img"></div>
            <div class="col-md-6 col-sm-12 col-xs-12 text">
                <h1 class="base-headline">Expert care for your furry, feathery, or scaley friend</h1>
                <p class="base-text">
                    We know how stressful it is to leave your pets at home alone. We’re a team of
                    experienced animal caregivers, well connected to local veterinarians.
                    Trust to us to love them like our own, and to keep them safe and happy till you’re home.
                </p>
                <button class="signup-format" onclick="location.href='/pets'">Sign Up</button>
            </div>
        </div>
    </div>
    <div class="container-fluid fourth-panel">
        <div class="container">
            <div class="modal-body row">
                <div class="col-md-12">
                    <h1 class="base-headline">Pets and their humans love us</h1>
                    <button class="signup-format" onclick="location.href='/pets'">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fifth-panel">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="base-headline">Affordable options, tailored to your needs</h1>
                <p class="base-text">
                    All services include live updates including photos and chat,
                    as well as notifications of sitter arrival and departure times.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Dog Walk</h2>
                        <p class="card-text">We’ll take your pup for a 30 minute walk and make sure he or she has fresh
                            food and water.</p>
                    </div>
                    <div class="price-tag">
                        <h2>&#36;15</h2>
                        <span>PER 30 MIN WALK</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Drop-in visit</h2>
                        <p class="card-text">We’ll stop by to snuggle, feed, and play with your pets in the comfort of
                            their own home.</p>
                    </div>
                    <div class="price-tag">
                        <h2>&#36;15</h2>
                        <span>PER 30 MIN VISIT</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>House sitting</h2>
                        <p class="card-text">We’ll stay overnight with your pets to make sure they have round-the-clock
                            love.</p>
                    </div>
                    <div class="price-tag">
                        <h2>&#36;45</h2>
                        <span>PER NIGHT</span>
                    </div>
                </div>
                <button class="signup-format" onclick="location.href='/pets'">Sign Up</button>
            </div>
        </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid footer">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="base-headline" id="contact">Contact Us</h1>
                    <h1 class="base-headline">481-624-3240</h1>
                    <h1 class="base-headline">Email us</h1>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
