<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="background">
        <!-- Navigation Bar -->
        <div class="navigation-bar">
            <nav class="navbar navbar-expand-lg px-3 py-4">
                <div class="container-fluid">
                    <a class="navbar-brand" style="font-size:20px;" href="#">RadhaKrishnaTravels</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end navigation-bar" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/mountainflight') }}">Mountain Flight</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/trekkingpackage') }}">Trekking Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/tourpackage') }}">Tour Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content');

        <!-- Footer -->
        <div class="footer">
            <footer class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 text-center">
                            <h4>Explore</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Home</a></li>
                                <li><a href="">Mountain Flight</a></li>
                                <li><a href="">Trekking</a></li>
                                <li><a href="">Tour Package</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Book Now</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 text-center">
                            <h4>Contact</h4>
                            <ul class="list-unstyled">
                                <li>Head Office</li>
                                <li>Location: Devkota Chowk, Sonauli Road, Bhairahawa, Nepal</li>
                                <li>Tel No.: O71-525354</li>
                                <li>Mobile No.: +977-9804454054, +977-9847540061</li>
                                <li>Email: radhakrishnaholidays@gmail.com</li>
                            </ul>
                        </div>
                        <div class="col-lg-1 col-md-6 text-center">
                            <h4>Legal</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Terms</a></li>
                                <li><a href="">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-6 text-center">
                            <h4>Follow us</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Facebook</a></li>
                                <li><a href="">Instagram</a></li>
                                <li><a href="">Twitter</a></li>
                            </ul>
                        </div>
                        <hr>
                        <p class="copyright">Copyright 2023 - Radha Krishna Holidays</p>
                    </div>
                </div>
            </footer>
        </div>



    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>