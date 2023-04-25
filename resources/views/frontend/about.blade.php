<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about Page</title>

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
                        <li class="nav-item"> <a class="nav-link " href="{{ url('/') }}">Home </a> </li>
                        <li class="nav-item"> <a class="nav-link " href="#">Mountain-Fligts</a> </li>
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/about') }}"> About </a></li>
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
    <section>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
              <img src="{{ asset('images/indexpage/bgg-img.jpg') }}" class="tp d-block w-100" alt="...">
                
              </div>
              <div class="carousel-item" data-bs-interval="2000">
              <img src="{{ asset('images/indexpage/head-bg.jpg') }}" class="tp d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
              <img src="{{ asset('images/indexpage/bgg-img.jpg') }}" class="tp d-block w-100" alt="...">
              </div>
            </div>
            <!--
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>-->
          </div>
    </section>
    <section class="container py-3">
        <div class="row">
            <div class="col-md-8">
                <h3><b>What is Radha Krishna Hoildays?</b></h3>
                <p>

                    Radha Krishna Holidays Pvt.Ltd. is a tour operator/agency for Nepal, Tibet and Bhutan in Kathmandu. We provide quality trips for our beloved customers in reasonable cost. As an adventure travel company we offer a wide range of tour and travel activities such as Nepal trekking, hiking, culture and sightseeing tour with professional guides (who can clearly describe the history and religious significant of the places), walking holidays in the low altitude to higher mountain peaks, wildlife tours, rafting, day hiking and many more. Our major operation destinations are Nepal, Tibet, Bhutan and kailash mansarovar yatra.Valleys, hills, mountains, jungles, towns, villages, rivers, waterfalls, lakes, hot springs –the entire part of South Asia, especially the beautiful destinations like Darjeeling, Sikkim, Dooars of India and the country of Bhutan have lots to provide you. You get to assemble marvellous moments in large variety of landscapes. You’ll be ready to meet new folks, their culture, cuisine, lifestyle, attire, festivals and such many things. Besides, very few places in India are as suitable as this region for adventure trips. As there are different altitude and different type of landscapes, travellers from the whole world come here to attend paragliding, trekking, mountaineering, mountain biking, white water rafting etc.
                    pic</p>
                    
                    <p>Radha Krishna Holidays Pvt.Ltd. has expertise in the field of tourism. They are very reliable and professional tour and travel operator of Jaigaon. Our team has versatile and qualified with complete information of proper service for customer and the value towards their choice and necessity.</p>
                    
                    <p>We are govt. registered Kathmandu based local Tour Company and always think about client’s satisfaction whether they travel to Nepal or Tibet or Bhutan or Sikkim. We are rather happy to introduce ourselves as a traveling partner, traveling advisor to provide correct information and advices to fulfill your adventure and luxury travel dreams. We operate every travel activities on guest’s interest. For your secure and enjoyable journey, we provide govt. license holder guide, who will be knowledgeable about the trip, well trained & experienced and makes every moment of your journey fantastic.
                    
                    The company comprises with a team of well experienced travel professionals who have spent in tourism field for over a decade. Believing in responsible tourism and Eco-friendly travel, we try our best providing tourism services that care about local communities & culture as well as wildlife conservation & the environment.
                    </p>
            </div>
            <div class="col-md-4">
                <div class="social-links align-items-center p-3 ">
                    <ul class="list">
                        <h2><b>Share It</b></h2>
                        <div class="icon-bar">
                            <a href="https://www.facebook.com/tripmandutravel" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </ul>
                </div>
                <div class="msgform p-4">
                 <p><b> Have any questions?</b>
                <h3><b>Send Us A Message</b></h3></p>
                        <form action="action_page.php">
                      
                          <label for="fname">First Name</label>
                          <input type="text" id="fname" name="firstname" placeholder="Your name..">
                      
                          <label for="lname">Last Name</label>
                          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                      
                          <label for="country">Country</label>
                          <input type="text" id="country" name="Country" placeholder="Country..">
                      
                          <label for="subject">Subject</label>
                          <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
                      
                          <input type="submit" value="Submit">
                      
                        </form>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <h2 class="text-center"><b>Why Tours In Nepal with Radha Krishna Holidays ?</b></h2>
        <p>Radha Krishna Holidays have long history in the tourism of Nepal. In these 1 decades we have build ourselves as the best tour agency in Nepal. In this years, we have been awarded from several organizations for outstanding services. Similarly, we are also the pioneer of Kailash Tour which is one of the biggest Hindu pilgrimage. Moreover, we send thousands of travelers to Tibet for pilgrimage and Kailash, Lhasa tour activities. Radha Krishna Holidays have built itself as the brand of best Nepal Tours operator.

            We are members of the following travel associations: NATTA (Nepal Association of Tours & Travel Agents), NTB (Nepal Tourism Board). </p>
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
                <a href='https://www.sait.com.np' target='_blank' class="text-white"> <strong>S.A I.T Solution and Trade
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