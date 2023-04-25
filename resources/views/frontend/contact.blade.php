<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact Page</title>

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
            <div class="p-3"> <a href="mailto: info@radhakrishnaholidays.org" style="text-decoration: none; color: #fff;"> info@radhakrishnaholidays.org</a></div>

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
                        <li class="nav-item "><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
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
    </section>
        <section class="p-3">
            <div class="team container p-5">
                <div class="row">
                    <div class="pkg col-lg-6">
                        <h1><b>Contact Us</b></h1>
                        <p><b>Have any questions? We would love to hear from you.</b></p>
                        <h5><b>GET BEST EXPERIENCE WITH TRIPMANDU</b></h5>
                        <!--<h2><i class="bi bi-geo-alt"></i></h2>
                        JDA Complex, 3F Sundhara,
                        Kathmandu<br>
                        <h2><i class="bi bi-phone"></i></h2>
                        (977) 9851135185<br>
                        <h2><i class="bi bi-envelope"></i></h2>
                        info@tripmandu.com.np </p>-->
                    </div>
                    <div class="contc col-lg-6">
                        <form class="text-start container text-primary ">
                            <div class="mb-3">
                                <input type="name" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Full Name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="rname" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="raddress" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Group Size">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="rname" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Arrival Date">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="raddress" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Depature Date">
                                    </div>
                                </div>
                            </div>
    
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message"
                                    rows="3"></textarea>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-light" type="button">Send</button>
                            </div>
                    </div>
                </div>
            </div>
        </section>
       <!-- <section class="whybg">
            <div class="container p-3">
                <h2 class="text-center"><b>Radha Krishna Holidays Pvt. Ltd. </b></h2>
                <div class="row p-3">
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
                </div>
            </div>
        </section>-->
        <section>
            <div class="container text-center p-2">
                <h4><b>Find Us with the help of google map</b></h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14126.288765997744!2d85.3298522!3d27.7304922!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb65a807441bde4fc!2sS.A%20I.T%20Solution%20and%20Trade%20Concern%20-%20Kathmandu%2C%20Nepal!5e0!3m2!1sen!2snp!4v1675879034164!5m2!1sen!2snp"
                        frameborder="0" width=100% height=500px style="border:0;" allowfullscreen="">
                    </iframe>
                    </div>
                    <div class="col-lg-6">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14126.288765997744!2d85.3298522!3d27.7304922!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb65a807441bde4fc!2sS.A%20I.T%20Solution%20and%20Trade%20Concern%20-%20Kathmandu%2C%20Nepal!5e0!3m2!1sen!2snp!4v1675879034164!5m2!1sen!2snp"
                        frameborder="0" width=100% height=500px style="border:0;" allowfullscreen="">
                    </iframe>
                    </div>
                </div>
            </div>
        </section>
    </section>
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