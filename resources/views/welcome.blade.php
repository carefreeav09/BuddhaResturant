<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buddha Resturant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">



    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Buddha Resturant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
                <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="#section-news" class="nav-link">News</a></li>
                <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<style>
    .mask-dark-bg
    {
        background: #33333333;
    }
</style>
<section class="site-cover" style="background-image: url({{ Voyager::image( $hero->background ) }});" id="section-home">
    <div class="mask-dark-bg">
    <div class="container ">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
            <div class="col-md-12">
                <h1 class="site-heading site-animate mb-3" style="text-shadow: black 2px 2px;">{{$hero->title}}</h1>
                <h2 class="h5 site-subheading mb-5 site-animate">{{$hero->description}}</h2>
                <p><a href="https://colorlib.com/" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">
                        Créer une réservation</a></p>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- END section -->

<section class="site-section" id="section-about">
    <div class="container">
        <div class="row">
            <div class="col-md-5 site-animate mb-5">
                <h4 class="site-sub-title font-weight-bolder">Our Story</h4>
                <h2 class="site-primary-title display-4">{{$abouts->title}}</h2>
                <p>{{$abouts->desc}}</p>

                <p><a href="#" class="btn btn-danger btn-lg">Learn More About Us</a></p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
                <img src="{{ Voyager::image( $abouts->featured_image ) }}" alt="Free Template by colorlib.com" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- END section -->


<section class="site-section bg-light" id="section-offer">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center mb-5 site-animate">
                <h4 class="site-sub-title">Our Offers</h4>
                <h2 class="display-4">Our Offer This Summer</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel site-owl">

                    <div class="item">
                        <div class="media d-block mb-4 text-center site-media site-animate border-0">
                            <img src="images/offer_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$19.50</h5>
                                <h5 class="mt-0 h4">Beef with Sausage</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="media d-block mb-4 text-center site-media site-animate border-0">
                            <img src="images/offer_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$29.50</h5>
                                <h5 class="mt-0 h4">Egg with Garlic </h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="media d-block mb-4 text-center site-media site-animate border-0">
                            <img src="images/offer_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$11.50</h5>
                                <h5 class="mt-0 h4">Beef Ribs</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="media d-block mb-4 text-center site-media site-animate border-0">
                            <img src="images/offer_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$33.50</h5>
                                <h5 class="mt-0 h4">Beef with Sauce</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="media d-block mb-4 text-center site-media site-animate border-0">
                            <img src="images/offer_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$12.50</h5>
                                <h5 class="mt-0 h4">Fresh Salmon Fish</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="media d-block mb-4 text-center site-media site-animate border-0">
                            <img src="images/offer_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$53.50</h5>
                                <h5 class="mt-0 h4">Beef Ribs</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="media d-block mb-4 text-center site-media site-animate border-0">
                            <img src="images/offer_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$22.50</h5>
                                <h5 class="mt-0 h4">Beef with Sauce</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="media d-block mb-4 text-center site-media site-animate border-0">
                            <img src="images/offer_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Fresh Salmon Fish</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="media d-block mb-4 text-center site-media site-animate border-0">
                            <img src="images/offer_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Beef Ribs</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section" id="section-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">Delicious Menu</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">

                <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item site-animate">
                        <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
                    </li>
                    <li class="nav-item site-animate">
                        <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
                    </li>
                    <li class="nav-item site-animate">
                        <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
                    </li>
                </ul>

                <div class="tab-content text-left">
                    <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                        <div class="row">
                            <div class="col-md-6 site-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$24.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$14.50</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 site-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$12.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$18.50</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                        <div class="row">
                            <div class="col-md-6 site-animate">

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$14.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$24.50</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 site-animate">

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$18.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$12.50</h6>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                        <div class="row">
                            <div class="col-md-6 site-animate">

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$24.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$14.50</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 site-animate">

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$18.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>

                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$12.50</h6>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section bg-light" id="section-news">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">News</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media d-block mb-4 text-center site-media site-animate">
                    <img src="images/offer_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                    <div class="media-body p-md-5 p-4">
                        <h5 class="mt-0 h4">We Have Dilecious Food</h5>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media d-block mb-4 text-center site-media site-animate">
                    <img src="images/offer_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                    <div class="media-body p-md-5 p-4">
                        <h5 class="mt-0 h4">Chef Special Menu</h5>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media d-block mb-4 text-center site-media site-animate">
                    <img src="images/offer_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                    <div class="media-body p-md-5 p-4">
                        <h5 class="mt-0 h4">Merriage Celebrations</h5>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section" id="section-gallery">
    <div class="container">
        <div class="row site-custom-gutters">

            <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">Gallery</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 site-animate">
                <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
                    <img src="images/menu_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 site-animate">
                <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
                    <img src="images/menu_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 site-animate">
                <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
                    <img src="images/menu_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4 site-animate">
                <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
                    <img src="images/menu_2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 site-animate">
                <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
                    <img src="images/menu_3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 site-animate">
                <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
                    <img src="images/menu_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                </a>
            </div>

        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section bg-light" id="section-contact">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">Get In Touch</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-7 mb-5 site-animate">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 site-animate">
                <p><img src="images/about_img_1.jpg" alt="" class="img-fluid"></p>
                <p class="text-black">
                    Address: <br> 121 Street, Melbourne Victoria <br> 3000 Australia <br> <br>
                    Phone: <br> 90 987 65 44 <br> <br>
                    Email: <br> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                </p>

            </div>

        </div>
    </div>
</section>
<div id="map"></div>
<!-- END section -->


<footer class="site-footer site-bg-dark site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 site-animate">
                        <h2 class="site-heading-2">About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3 site-animate">
                        <div class="site-footer-widget mb-4">
                            <h2 class="site-heading-2">The Restaurant</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">About Us</a></li>
                                <li><a href="#" class="py-2 d-block">Chefs</a></li>
                                <li><a href="#" class="py-2 d-block">Events</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 site-animate">
                        <div class="site-footer-widget mb-4">
                            <h2 class="site-heading-2">Useful links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">Foods</a></li>
                                <li><a href="#" class="py-2 d-block">Drinks</a></li>
                                <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                                <li><a href="#" class="py-2 d-block">Brunch</a></li>
                                <li><a href="#" class="py-2 d-block">Dinner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 site-animate">
                        <div class="site-footer-widget mb-4">
                            <h2 class="site-heading-2">Useful links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">Foods</a></li>
                                <li><a href="#" class="py-2 d-block">Drinks</a></li>
                                <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                                <li><a href="#" class="py-2 d-block">Brunch</a></li>
                                <li><a href="#" class="py-2 d-block">Dinner</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row site-animate">
            <div class="col-md-12 text-center">
                <div class="site-footer-widget mb-4">
                    <ul class="site-footer-social list-unstyled ">
                        <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>




<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
                    </div>
                    <div class="col-lg-12 p-5">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <small>CLOSE </small><span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="mb-4">Reserve A Table</h1>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_fname">First Name</label>
                                    <input type="text" class="form-control" id="m_fname">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_lname">Last Name</label>
                                    <input type="text" class="form-control" id="m_lname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_email">Email</label>
                                    <input type="email" class="form-control" id="m_email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_people">How Many People</label>
                                    <select name="" id="m_people" class="form-control">
                                        <option value="1">1 People</option>
                                        <option value="2">2 People</option>
                                        <option value="3">3 People</option>
                                        <option value="4+">4+ People</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_phone">Phone</label>
                                    <input type="text" class="form-control" id="m_phone">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_date">Date</label>
                                    <input type="text" class="form-control" id="m_date">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_time">Time</label>
                                    <input type="text" class="form-control" id="m_time">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_message">Message</label>
                                    <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- END Modal -->

<!-- loader -->
<div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/jquery.timepicker.min.js')}}"></script>

<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>



<script src="{{asset('js/main.js')}}"></script>


</body>
</html>
