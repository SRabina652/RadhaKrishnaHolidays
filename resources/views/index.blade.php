<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 </head>

<body>
    <!--iconbar-->
    <section class="bg text-light ">
        <div class="d-flex justify-content-center align-items-center container text-center">
        <div class="p-3"> <a href="mailto: info@radhakrishnaholidays.org"
                    style="text-decoration: none; color: #fff;"> info@radhakrishnaholidays.org</a></div>

            <div class="social-links align-items-center me-5 ">
                <ul class="list  ">
                    <div class="icons">
                        <div class="circle-icon">
                            <div class="inside"><i class="bi bi-messenger"></i>&nbsp;&nbsp;</div>
                        </div>&nbsp;&nbsp;
                        <div class="circle-icon">
                            <div class="inside"><i class="bi bi-facebook"></i>&nbsp;&nbsp;</div>
                        </div>&nbsp;&nbsp;
                        <div class="circle-icon">
                            <div class="inside"><i class="bi bi-twitter"></i>&nbsp;&nbsp;</div>
                        </div>&nbsp;&nbsp;
                        <div class="circle-icon">
                            <div class="inside"><i class="bi bi-youtube"></i>&nbsp;&nbsp;</div>
                        </div>&nbsp;&nbsp;

                    </div>
                </ul>

            </div>

        </div>


    </section>
    <!--iconbar end-->
    <!--navbar-->
    <section>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-scrolled">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <img src="{{ asset('images/indexpage/logo.jpg') }}" class="logo mx-5" alt="...">
                    <ul class="navbar-nav  ms-auto ">
                        <li class="nav-item"> <a class="nav-link active " href="{{ url('/') }}">Home </a> </li>
                        <li class="nav-item"> <a class="nav-link " href="#">Mountain-Fligts</a> </li>
                        <li class="nav-item"><a class="nav-link " href="{{ url('/about') }}"> About </a></li>
                        <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Trekking</a>
                            <div class="dropdown-menu megamenu" role="menu">
                                <div class="container">
                                    <div class="row mega text-start">
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><a href="kathmandu.html" class="card-link text-start">
                                                        <h4><b>Dolpa Region</b></h4>
                                                    </a></li>
                                                <li> <a href="pashupati.html" class="card-link">Upper Dolpa Trek</a>
                                                </li>
                                                <li> <a href="sanga.html" class="card-link">Dolpa Nomad Trek</a></li>
                                                <li> <a href="dhulikhel.html" class="card-link">Dolpa To Jumla Trek</a>
                                                </li>
                                                <li> <a href="basantapur.html" class="card-link">Dolpa To Jomsom
                                                        Trek</a>
                                                </li>
                                                <li> <a href="patan.html" class="card-link">Upper Dolpa Shey Gompa
                                                        Trek</a></li>
                                                <li> <a href="bhaktapur.html" class="card-link">Lower Dolpa Trap
                                                        ValleyTrek</a></li>
                                                <li> <a href="chandagiri.html" class="card-link">Jumla To Rara Lake
                                                        Trek</a>
                                                </li>
                                                <li> <a href="nagarkot.html" class="card-link">Jumla To Humla Trek</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><a href="pokhara.html" class="card-link">
                                                        <h4><b>Non-Tourist Region</b></h4>
                                                    </a></li>
                                                <li> <a href="cycle.html" class="card-link">Panch Pokhari Trek</a></li>
                                                <li> <a href="paragliding.html" class="card-link">Manaslu Circuit
                                                        Trek</a></li>
                                                <li> <a href="bungee.html" class="card-link">Limi Valley Trek</a></li>
                                                <li> <a href="phudimkot.html" class="card-link">Nyinba Valley Trek</a>
                                                </li>
                                                <li> <a href="chamero.html" class="card-link">Lower Mustang Trek</a>
                                                </li>
                                                <li> <a href="lakeside.html" class="card-link">Saipal Base Camp Trek</a>
                                                </li>
                                                <li> <a href="bindabasani.html" class="card-link">Makalu Base Camp
                                                        Trek</a></li>
                                                <li> <a href="bindabasani.html" class="card-link">Milke Danda Trek</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li> <a href="chitwan.html" class="card-link">
                                                        <h4><b>Everest Region</b></h4>
                                                    </a></li>
                                                <li> <a href="elepsafari.html" class="card-link">Everest Base Camp
                                                        Trek</a></li>
                                                <li> <a href="elepbath.html" class="card-link">Everest Panorama Trek</a>
                                                </li>
                                                <li> <a href="jungle.html" class="card-link">Chola Pass to Everest Base
                                                        Camp Trek</a></li>
                                                <li> <a href="dayout.html" class="card-link">Jiri to Everest Base Camp
                                                        Trek</a></li>
                                                <li> <a href="wildanimal.html" class="card-link">Everest Gokoyo Lake
                                                        Trek</a></li>
                                                <li> <a href="bird.html" class="card-link">Holy Mount Lapchi King
                                                        Trek</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li> <a href="chitwan.html" class="card-link">
                                                        <h4><b>Annapurna Region</b></h4>
                                                    </a></li>
                                                <li> <a href="elepsafari.html" class="card-link">Annapurna Base Camp
                                                    </a>
                                                </li>
                                                <li> <a href="elepbath.html" class="card-link">Dhaulagiri Circuit
                                                        Trek</a></li>
                                                <li> <a href="jungle.html" class="card-link">Pokhara to Jomsom Trek</a>
                                                </li><br>
                                                <li> <a href="chitwan.html" class="card-link">
                                                        <h4><b>Dolkha Region</b></h4>
                                                    </a></li>
                                                <li> <a href="jungle.html" class="card-link">Kalinchowk Trek</a></li>
                                            </ul>
                                        </div>
                                        <div class="container p-3">
                                            <div class="row mega1 text-start">
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li><a href="kathmandu.html" class="card-link text-start">
                                                                <h4><b>Kanchanjunga Region </b></h4>
                                                            </a></li>
                                                        <li> <a href="pashupati.html" class="card-link">Kanchanjunga
                                                                Base Camp</a></li>
                                                        <li> <a href="sanga.html" class="card-link">Kanchanjunga South
                                                                Face Trek </a></li>
                                                        <li> <a href="dhulikhel.html" class="card-link">Kanchanjunga
                                                                North And South Face Trek</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li><a href="pokhara.html" class="card-link">
                                                                <h4><b>Lantang Region</b></h4>
                                                            </a></li>
                                                        <li> <a href="cycle.html" class="card-link">Helambu Circuit
                                                                Trek</a></li>
                                                        <li> <a href="paragliding.html" class="card-link">Ganesh
                                                                Himal</a></li>
                                                        <li> <a href="bungee.html" class="card-link">Ganja La Pass
                                                                Trek</a></li>

                                                    </ul>
                                                </div>
                                                <!--<div class="col-lg-3">
                                                <ul>
                                                    <li> <a href="chitwan.html" class="card-link">
                                                            <h4><b>Everest Region</b></h4>
                                                        </a></li>
                                                    <li> <a href="elepsafari.html" class="card-link">Everest Base Camp Trek</a></li>
                                                    <li> <a href="elepbath.html" class="card-link">Everest Panorama Trek</a></li>
                                                    <li> <a href="jungle.html" class="card-link">Chola Pass to Everest Base Camp Trek</a></li>
                                                    <li> <a href="dayout.html" class="card-link">Jiri to Everest Base Camp Trek</a></li>
                                                    <li> <a href="wildanimal.html" class="card-link">Everest Gokoyo Lake Trek</a></li>
                                                    <li> <a href="bird.html" class="card-link">Holy Mount Lapchi King Trek</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul>
                                                    <li> <a href="chitwan.html" class="card-link">
                                                            <h4><b>Annapurna Region</b></h4>
                                                        </a></li>
                                                    <li> <a href="elepsafari.html" class="card-link">Annapurna Base Camp </a>
                                                    </li>
                                                    <li> <a href="elepbath.html" class="card-link">Dhaulagiri Circuit Trek</a></li>
                                                    <li> <a href="jungle.html" class="card-link">Pokhara to Jomsom Trek</a></li><br>
                                                    <li> <a href="chitwan.html" class="card-link">
                                                        <h4><b>Dolkha Region</b></h4>
                                                    </a></li>
                                                    <li> <a href="jungle.html" class="card-link">Kalinchowk Trek</a></li>
                                                </ul>
                                            </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- dropdown-mega-menu.// -->
                        </li>
                        <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Tours</a>
                            <div class="dropdown-menu megamenu" role="menu">
                                <div class="container">
                                    <div class="row mega text-start">

                                        <div class="col-lg-3">
                                            <ul>
                                                <li><a href="pokhara.html" class="card-link">
                                                        <h4><b>Nepal Tour</b></h4>
                                                    </a></li>
                                                <li> <a href="cycle.html" class="card-link">Kathmandu Everest Base Camp
                                                        Tour </a></li>
                                                <li> <a href="paragliding.html" class="card-link">Kathmandu-Pokhara-Mukthinath Tour</a></li>
                                                <li> <a href="bungee.html" class="card-link">Rara Lake and Gorakhpur
                                                        Tour </a></li>
                                                <li> <a href="phudimkot.html" class="card-link">Chitwan and Gorakhpur
                                                        Tour </a></li>
                                                <li> <a href="chamero.html" class="card-link">Holy Gosaikund Heli Tour
                                                    </a></li>
                                                <li> <a href="lakeside.html" class="card-link">Lumbini Pilgrimage Tour
                                                    </a></li>

                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li> <a href="chitwan.html" class="card-link">
                                                        <h4><b>Tibet Tour </b></h4>
                                                    </a></li>
                                                <li> <a href="elepsafari.html" class="card-link">Tibet Motorbike Tour
                                                    </a></li>
                                                <li> <a href="elepbath.html" class="card-link">Lhasa Namtso Lake Tour
                                                    </a></li>
                                                <li> <a href="jungle.html" class="card-link">Mount Kailash via
                                                        Helicopter Tour </a></li>
                                                <li> <a href="dayout.html" class="card-link">Mount Kailash Inner
                                                        Parikrama Tour </a></li>
                                                <li> <a href="wildanimal.html" class="card-link">Mount Kailash via
                                                        Simikot Tour</a></li>
                                                <li> <a href="bird.html" class="card-link">Holy Kailash and Manasarovar
                                                        Tour </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li> <a href="chitwan.html" class="card-link">
                                                        <h4><b>Outbound Tour </b></h4>
                                                    </a></li>
                                                <li> <a href="elepsafari.html" class="card-link">Dubai Tour</a>
                                                </li>
                                                <li> <a href="elepbath.html" class="card-link">Dragon of China Tour </a>
                                                </li>
                                                <li> <a href="jungle.html" class="card-link">Bali Tour </a></li><br>
                                                <li> <a href="elepbath.html" class="card-link">Malaysia and Singapore
                                                        Tour </a></li>
                                                <li> <a href="jungle.html" class="card-link">Maldives Tour </a></li><br>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <ul>
                                                <li><a href="kathmandu.html" class="card-link text-start">
                                                        <h4><b>India Tour</b></h4>
                                                    </a></li>
                                                <li> <a href="pashupati.html" class="card-link">Darjeling Singalila
                                                        Ridge Tour</a></li>
                                                <li> <a href="sanga.html" class="card-link">North-East India and
                                                        Darjeing Trek</a></li>
                                                <li> <a href="dhulikhel.html" class="card-link">Goa Tour</a></li>
                                                <li> <a href="basantapur.html" class="card-link">Golden Triangle
                                                        Tour</a>
                                                </li>
                                                <li> <a href="patan.html" class="card-link">Jwels of Rajasthan Tour</a>
                                                </li>
                                                <li> <a href="bhaktapur.html" class="card-link">Simla Manali Honeymoon
                                                        Tour</a></li>
                                                <li> <a href="chandagiri.html" class="card-link">Trials of Buddha
                                                        Tour</a>
                                                </li>
                                                <li> <a href="nagarkot.html" class="card-link">Buddha Darsan Tour</a>
                                                </li>
                                                <li> <a href="chandagiri.html" class="card-link">Buddhist Temples and
                                                        East India Tour</a>
                                                </li>
                                                <li> <a href="nagarkot.html" class="card-link">Kerela with Beach Hoilday
                                                        Tour </a></li>
                                            </ul>
                                        </div>

                                        <div class="container">
                                            <div class="row mega1 text-start">
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li><a href="kathmandu.html" class="card-link text-start">
                                                                <h4><b>Bhutan Tour</b></h4>
                                                            </a></li>
                                                        <li> <a href="pashupati.html" class="card-link">Druk Path
                                                                Trek</a></li>
                                                        <li> <a href="sanga.html" class="card-link">Classic Laya
                                                                Path</a></li>
                                                        <li> <a href="dhulikhel.html" class="card-link">Paro Thimpu Tour
                                                            </a></li>
                                                        <li> <a href="chitwan.html" class="card-link">
                                                                <h4><b>Chardham Tour </b></h4>
                                                            </a></li>
                                                        <li> <a href="jungle.html" class="card-link">Chardham Yatra
                                                                Tour</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li><a href="pokhara.html" class="card-link">
                                                                <h4><b>Kailash Tour </b></h4>
                                                            </a></li>
                                                        <li> <a href="cycle.html" class="card-link">Holy Mount Kailash
                                                                Yatra Tour </a></li>
                                                        <li> <a href="paragliding.html" class="card-link">Mount Kailash
                                                                and Mansarovar Yatra </a></li>
                                                        <li> <a href="bungee.html" class="card-link"></a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li><a href="kathmandu.html" class="card-link text-start">
                                                                <h4><b>Gangtok Tour</b></h4>
                                                            </a></li>
                                                        <li> <a href="pashupati.html" class="card-link">Gangtok-Kalimpong-Dargeeling Tour </a>
                                                        </li>
                                                        <li> <a href="sanga.html" class="card-link">Gangtok-Dargeling
                                                                Tour </a></li>
                                                    </ul>
                                                </div>
                                                <!--<div class="col-lg-3">
                                                <ul>
                                                    <li> <a href="chitwan.html" class="card-link">
                                                            <h4><b>Everest Region</b></h4>
                                                        </a></li>
                                                    <li> <a href="elepsafari.html" class="card-link">Everest Base Camp Trek</a></li>
                                                    <li> <a href="elepbath.html" class="card-link">Everest Panorama Trek</a></li>
                                                    <li> <a href="jungle.html" class="card-link">Chola Pass to Everest Base Camp Trek</a></li>
                                                    <li> <a href="dayout.html" class="card-link">Jiri to Everest Base Camp Trek</a></li>
                                                    <li> <a href="wildanimal.html" class="card-link">Everest Gokoyo Lake Trek</a></li>
                                                    <li> <a href="bird.html" class="card-link">Holy Mount Lapchi King Trek</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul>
                                                    <li> <a href="chitwan.html" class="card-link">
                                                            <h4><b>Annapurna Region</b></h4>
                                                        </a></li>
                                                    <li> <a href="elepsafari.html" class="card-link">Annapurna Base Camp </a>
                                                    </li>
                                                    <li> <a href="elepbath.html" class="card-link">Dhaulagiri Circuit Trek</a></li>
                                                    <li> <a href="jungle.html" class="card-link">Pokhara to Jomsom Trek</a></li><br>
                                                    <li> <a href="chitwan.html" class="card-link">
                                                        <h4><b>Dolkha Region</b></h4>
                                                    </a></li>
                                                    <li> <a href="jungle.html" class="card-link">Kalinchowk Trek</a></li>
                                                </ul>
                                            </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- dropdown-mega-menu.// -->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="reserve.html">Reservation</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div> <!-- navbar-collapse.// -->
            </nav>
            <!--<div class="icon-bar">
            <a href="https://www.facebook.com/tripmandutravel" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="google"><i class="fa fa-google"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
        </div>-->
        </header>
        <!--image ko biccha ma bhako welcome text-->
        <div>
            <!--background Starts-->
            <div class="bgg-img">
                <div class="row text-center text-white">
                    <h1><b>EXPLORE NEW ADVENTURES</b></h1>
                    <div class="input-box">

                        <input type="text" placeholder="Search here..." />
                        <button class="button">Search</button>
                    </div>
                </div>
            </div>
            <!--navbarend-->
            <!--services-->
            <section class="container">
                <div class="serv container">
                    <div class="row py-5">
                        <div class="col-lg-4">
                            <div class="box">
                                <h1><i class="fa-sharp fa-solid fa-person-hiking"></i></h1>
                                <h2 class="text-center">Trekking</h2>
                                <p class="text-start">Trekking in Nepal is an adventure of a lifetime that offers a
                                    unique
                                    opportunity to explore the country's natural beauty, diverse culture, and rich
                                    history.
                                    With its majestic peaks, picturesque valleys, and traditional villages, Nepal is a
                                    paradise for trekkers from around the world.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box">
                                <h2 class="text-center">Tours</h2>
                                <p class="text-start">Touring Nepal is an unforgettable experience that combines
                                    stunning
                                    natural landscapes, cultural heritage, and adventure activities. Nepal is a country
                                    that
                                    has something to offer for everyone, whether it is exploring ancient temples and
                                    palaces
                                    in Kathmandu.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box">
                                <h1><i class="fa-duotone fa-person-hiking"></i></h1>
                                <h2 class="text-center">Climbing</h2>
                                <p class="text-start">Climbing in Nepal is an adventure of a lifetime that attracts
                                    thousands of climbers from around the world every year. Nepal is home to some of the
                                    world's highest and most challenging peaks, including Mount Everest, which is the
                                    ultimate goal for many mountaineers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--services end-->
        </div>
        <!--recommended-->
        <section class="recom container">
            <div class="container mt-4">
                <div class="text-center">
                    <p>RECOMMENDED BY EXPERTS</p>
                    <h2>BEST TREKKING & HIKING PACKAGES</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="container2">
                            <img src="{{ asset('images/indexpage/pachpokhari.png') }}" class="rec" alt="Notebook" style="width:100%;">
                            <div class="contentt">
                                <a href="index.html">
                                    <h4 class="text-white text-center"><b>Pachpokhari Trek</b></h4>
                                </a>
                                <ul class="list-unstyled d-flex justify-content-center mb-0 py-2 text-warning">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="container2">
                            <img src="{{ asset('images/indexpage/jwels-rajasthan.jpg') }}" class="rec" alt="Notebook" style="width:100%;">

                            <div class="contentt">
                                <a href="index.html">
                                    <h4 class="text-white text-center"><b>Jewels of Rajasthan</b></h4>
                                </a>
                                <ul class="list-unstyled d-flex justify-content-center mb-0 py-2 text-warning">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="container2">
                            <img src="{{ asset('images/indexpage/gangtok.jpg') }}" class="rec" alt="Notebook" style="width:100%;">
                            <div class="contentt">
                                <a href="index.html">
                                    <h4 class="text-white text-center"><b>Gangtok-Dargeling</b></h4>
                                </a>
                                <ul class="list-unstyled d-flex justify-content-center mb-0 py-2 text-warning">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="container2">
                            <img src="{{ asset('images/indexpage/lumbini.jpg') }}" class="rec" alt="Notebook" style="width:100%;">
                            <div class="contentt">
                                <a href="index.html">
                                    <h4 class="text-white text-center"><b>Lumbini Pilgrimage Tour</b></h4>
                                </a>
                                <ul class="list-unstyled d-flex justify-content-center mb-0 py-2 text-warning">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="container2">
                            <img src="{{ asset('images/indexpage/annapurna.jpg') }}" class="rec" alt="Notebook" style="width:100%;">
                            <div class="contentt">
                                <a href="index.html">
                                    <h4 class="text-white text-center"><b>Annapurna Base Camp</b></h4>
                                </a>
                                <ul class="list-unstyled d-flex justify-content-center mb-0 py-2 text-warning">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="container2">
                            <img src="{{ asset('images/indexpage/nyinba.webp') }}" class="rec" alt="Notebook" style="width:100%;">
                            <div class="contentt">
                                <a href="index.html">
                                    <h4 class="text-white text-center"><b>Nyinba Valley Trek </b></h4>
                                </a>
                                <ul class="list-unstyled d-flex justify-content-center mb-0 py-2 text-warning">
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--recommended ends-->
        <!--popular packages-->
        <section class="recomm p-5">
            <div class="container">
                <div class="expt text-center">
                    <h5><b>FEATURED PACKAGES</b></h5>
                    <h2><b>POPULAR TOURS PACKAGES</b></h2>
                </div>
                <div class="pop">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mt-4" style="width: 16rem;">
                                <div class="content"> <a href="#">
                                        <div class="content-overlay"></div>
                                        <img src="{{ asset('images/indexpage/bali.jpg') }}" class="content-image" alt="Bali">

                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Bali</h3>
                                            <p class="content-text"><i class="fa fa-map-marker"></i> Bali</p>
                                        </div>
                                    </a> </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title">Duration:17 Days</h5>
                                    <p class="card-text">
                                    <h5><b>Bali</b></h5>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-start">
                                        <p><b>PRICE:US$2500</b>
                                        <h4>US$3000</h4>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mt-4" style="width: 16rem;">
                                <div class="content"> <a href="#">
                                        <div class="content-overlay"></div>
                                        <img src="{{ asset('images/indexpage/chardham.jpg') }}" class="content-image" alt="Chnadradham">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Chardham</h3>
                                            <p class="content-text"><i class="fa fa-map-marker"></i> Chardham</p>
                                        </div>
                                    </a> </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title">Duration:17 Days</h5>
                                    <p class="card-text">
                                    <h5><b>Chardham</b></h5>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-start">
                                        <p><b>PRICE:US$2500</b>
                                        <h4>US$3000</h4>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mt-4" style="width: 16rem;">
                                <div class="content"> <a href="#">
                                        <div class="content-overlay"></div>
                                        <img src="{{ asset('images/indexpage/tibet-bg.jpg') }}" class="content-image" alt="tibet">

                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Tibet</h3>
                                            <p class="content-text"><i class="fa fa-map-marker"></i> Tibet</p>
                                        </div>
                                    </a> </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title">Duration:17 Days</h5>
                                    <p class="card-text">
                                    <h5><b>Tibet</b></h5>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-start">
                                        <p><b>PRICE:US$2500</b>
                                        <h4>US$3000</h4>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mt-4" style="width: 16rem;">
                                <div class="content"> <a href="#">
                                        <div class="content-overlay"></div>
                                        <img src="{{ asset('images/indexpage/Maldives.jpg') }}" class="content-image" alt="Maldives">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Maldives</h3>
                                            <p class="content-text"><i class="fa fa-map-marker"></i> Maldives</p>
                                        </div>
                                    </a> </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title">Duration:17 Days</h5>
                                    <p class="card-text">
                                    <h5><b>Maldives</b></h5>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-start">
                                        <p><b>PRICE:US$2500</b>
                                        <h4>US$3000</h4>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--popular package end-->
        <!--video-->
        <section>
            <div class="video container p-3">
                <iframe width="100%" height="515" src="https://www.youtube.com/embed/4OiXfDdbtnM?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </section>
        <!--video end-->
        <!--welcome text-->
        <section>
            <div class="container p-3">
                <div class="row">
                    <div class="wel col-lg-6">
                        <h5><b>WELCOME TO</b></h5>
                        <h2><b>Radha Krishna Holidays</b></h2>
                        <p>Welcome to our travel company! We are delighted to have you here and are excited to share
                            with you the
                            incredible destinations and experiences that we offer.</p>

                        <p>Tour operator/agency for Nepal, Tibet and Bhutan in Kathmandu. We provide quality trips for
                            our beloved customers in reasonable cost. As an adventure travel company we offer a wide
                            range of tour and travel activities such as Nepal trekking, hiking, culture and sightseeing
                            tour with professional guides (who can clearly describe the history and religious
                            significant of the places), walking holidays in the low altitude to higher mountain peaks,
                            wildlife tours, rafting, day hiking and many more. Our major operation destinations are
                            Nepal, Tibet, Bhutan and kailash mansarovar yatra.
                        </p>
                        <p>At our travel company, we believe that travel is not just about visiting new places, but
                            about creating
                            unforgettable memories that will last a lifetime.
                            Thank you for choosing our travel company, and we look forward to helping you plan your next
                            adventure!
                        <p>
                    </div>
                    <div class="welc col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Locally Based Operator
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Trek with natives of the region and experience authentic Nepal. We have
                                            guides from all over the country to provide you the best trekking experience
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Fully Customized Itineraries
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Tailor your travel experience to your specific needs and preferences
                                            with us and gain more control over the itinerary and personalize the
                                            experience.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Expertise
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>We Have knowledgeable and experienced travel
                                            agents who are familiar with popular and off-the-beaten-path destinations.
                                            We understand travel regulations and restrictions, and can provide
                                            personalized travel advice based on their expertise. We have language
                                            proficiency and cultural awareness, which can be helpful in communicating
                                            with customers from different countries and backgrounds.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Customer service
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Excellent customer service is crucial for every tours and travel.
                                            Responsive and friendly staff are available 24/7 to assist our
                                            customers. We have multilingual customer service to cater
                                            to customers from different parts of the world. We also have
                                            prompt resolution of customer complaints, and be able to assist customers in
                                            travel emergencies. Personalized attention to customer needs, post-trip
                                            follow-up, and feedback collection are also important aspects of our
                                            customer
                                            service.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Value
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>We offers competitive pricing and discounts, loyalty programs for frequent
                                            travelers, and transparent pricing policies. We have clear
                                            cancellation and refund policies, and be knowledgeable about travel deals
                                            and packages. Additionally, we budget-friendly travel options
                                            for cost-conscious customers. For satisfaction and retention, we provides value to our customers.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--welcome text end-->

        <!--Blog starts-->

        <section class="section gray-bg" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div class="section-title">
                            <p>Latest Posts</p>
                            <h1>News & Events</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">04 FEB</div>
                                <a href="#">
                                    <img src="{{ asset('images/indexpage/blog1.jpg') }}" alt="Maldives">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h2><a href="#" style="text-decoration: none; color: #000;">Kailash Mansarovar Yatra</a>
                                </h2>
                                <p>Lake Mansarovar prevails as one of the important pilgrimages for Hindu, Jain,
                                    Buddhist, and others. The lake is believed to impersonate impurity, thus is holds
                                    highest essence...</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">28 APR</div>
                                <a href="#">
                                    <img src="{{ asset('images/indexpage/blog2.jpg') }}">

                                </a>
                            </div>
                            <div class="blog-info">
                                <h2><a href="#" style="text-decoration: none; color: #000">An ablution steeped in
                                        mysticism</a></h2>
                                <p>Geologists believe that about 225 million years ago, India was a large island
                                    situated off the Australian coast...</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">10 JAN</div>
                                <a href="#">
                                    <img src="{{ asset('images/indexpage/blog3.jpg') }}">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h2><a href="#" style="text-decoration: none; color: #000">Tourism in Nepal</a></h2>
                                <p>Nepal with rich ancient cultures set against the most dramatic scenery in the world
                                    is a land of discovery and unique experience.For broad minded individuals who value
                                    an experience that is authentic and mesmerizing...</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Ends-->

        <!--plan your trip-->
        <section class="container p-3">
            <div class="bg1-img">
                <div class="row container">
                    <div class="plantrip col-lg-6 text-white">
                        <p>
                        <h5><b>DREAM, PLAN, AND DISCOVER</b></h5>
                        <h2><b>A JOURNEY BUILT JUST<br> FOR YOU.</b></h2>
                        <button type="button" class="btn btn-primary btn-lg">Plan Your Trip</button>
                        </p>
                    </div>
                    <form action="/action_page.php" class="login container col-lg-6">
                        <h2>Login</h2>
                        <label for="email"><b>Full Name</b></label>
                        <input type="text" placeholder="Enter Full Name" name="full-name" required>

                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="submit" class="btn-1">Login</button>
                    </form>
                </div>
            </div>
        </section>
        <!--slider end-->
        <!--3d-->
        <section class="testimonial text-center">
            <div class="container">

                <div class="heading white-heading">
                    <h2>Our Testimonials</h2>
                </div>
                <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-bs-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="testimonial4_slide">
                                <img src="{{ asset('images/indexpage/testimonial/akshay.png') }}" class="img-circle img-responsive">
                                <p>I had an amazing experience with this travel company! The tour guides were
                                    knowledgeable and friendly, the accommodations were top-notch, and the itinerary was
                                    perfectly planned. I can't wait to book another trip with them!
                                </p>
                                <h4>- Dipesh Gautam</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                                <img src="{{ asset('images/indexpage/testimonial/dharam.png') }}" class="img-circle img-responsive">
                                <p>I have traveled all over the world, and this tour was one of the best I have ever
                                    taken. The sights were breathtaking, the food was delicious, and the overall
                                    experience was unforgettable. I highly recommend this tour to anyone looking for an
                                    adventure.
                                </p>
                                <h4>- Bhim pd. Lamichhane</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                            <img src="{{ asset('images/indexpage/testimonial/k.png') }}" class="img-circle img-responsive">
                                <p>I was a bit nervous about traveling to a new country, but the staff at this travel
                                    company made me feel completely at ease. They took care of everything, from the
                                    airport transfers to the hotel reservations, and the tour itself was simply amazing.
                                    I can't thank them enough for such a wonderful experience.
                                </p>
                                <h4>- Kamal Nepal</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                            <img src="{{ asset('images/indexpage/testimonial/natheline.png') }}" class="img-circle img-responsive">
                                <p>If you want to see the world in style, this travel company is the way to go. Their
                                    attention to detail is unmatched, and every aspect of the tour was carefully planned
                                    to ensure a seamless experience. I felt like royalty the entire time, and I can't
                                    wait to book my next trip with them.
                                </p>
                                <h4>- Naven Gauli</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                            <img src="{{ asset('images/indexpage/testimonial/ram.png') }}" class="img-circle img-responsive">
                                <p>I've traveled with many tour companies in the past, but this one really stood out.
                                    The guides were incredibly knowledgeable and passionate about the destinations we
                                    visited, and the accommodations and transportation were top-notch. I would
                                    definitely recommend this tour to anyone looking for an unforgettable experience.
                                </p>
                                <h4>- Randeep Hamal</h4>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </section>
        <!--footer-->
        <footer>
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="test col-md-3">
                        <i class="bi bi-geo-alt fa-3x m-3"></i> <b>Head Office :</b>
                        <p>Devkota Chowk, Sonauli Road, Bhairahawa, Nepal<br>
                            Tel:- O71-525354<br>
                            Mobile No.: +977-9804454054 , +977-9847540061<br>
                            Mail Id : radhakrishnaholidays@gmail.com </p>
                    </div>
                    <div class="test col-md-3">
                        <i class="bi bi-geo-alt fa-3x m-3"></i> <b>Branch Office :</b>
                        <p>Kamalpokhari, Kathmandu, Nepal <br>
                            Tel:- 01-4701058<br>
                            Mobile No.: +977-9801006141 ,+977-9801006142 <br>
                            Mail Id : radhakrishnaholidaysktm@gmail.com </p>
                    </div>
                    <div class="test col-md-3">
                        <i class="bi bi-geo-alt fa-3x m-3"></i> <b>Sales Office :</b>
                        <p>
                            Mobile No.: 0091-9936058566 , 0091-9838534500 <br>
                            Mail Id : radhakrishnaholidaysgkp@gmail.com<br>
                            Mail Id : info@radhakrishnaholidays.org </p>
                    </div>
                    <!--<div class="col-lg-3">
                        <h4>Google Map</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14126.288765997744!2d85.3298522!3d27.7304922!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb65a807441bde4fc!2sS.A%20I.T%20Solution%20and%20Trade%20Concern%20-%20Kathmandu%2C%20Nepal!5e0!3m2!1sen!2snp!4v1675879034164!5m2!1sen!2snp"
                            frameborder="0" width=250px height=200px style="border:0;" allowfullscreen="">
                        </iframe>
                    </div>-->
                </div>
            </div>
        </footer>

        <footer id="footer">
            <div class="container">
                <div class="credits">
                    <p class="fotext text-center text-white">© Copyright 2023 | All Rights Reserved | Powered by
                        <a href='https://www.sait.com.np' target='_blank' class="text-white"> <strong>S.A I.T Solution
                                and Trade
                                Concern.</strong></a>
                    </p>
                </div>
            </div>
        </footer>
        <!--footer end-->
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https:/y.com/jquery-3.6.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function () { myFunction() };

    // Get the header
    var header = document.getElementById("navbarNav");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

</script>
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerview: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>


</html>