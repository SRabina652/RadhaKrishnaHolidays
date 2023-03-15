<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radha Krishna Holidays</title>

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
                                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mountain Flight</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Trekking</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tour Package
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another</a></li>
                                    <li><a class="dropdown-item" href="#">Something</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Annapurna Base Camp Trek -->
        <div class="annapurna-base-camp-trek">
            <div class="container">
                <h2 class="titles">Annapurna Base Camp Trek</h2>
                <div class="row">
                    <div class="col-md-8 summary"> <!-- 70% width column -->
                        <img src="{{ asset('images/homepage/Home-hero-img.jpg') }}" class="img-fluid" alt="Your Image">
                        <h3>Description</h3>
                        <p>Annapurna Base Camp Trek combines some of the most spectacular mountain scenery, providing a fascinating insight into the modern hill life of Nepal. This unique trek along local trails, through forests, villages and terraced farmland treats you to unparalleled mountain scenery, surrounded by enormous glaciers giving you an inside experience into the Nepalese life and culture.</p>

                        <!-- Trip Schedule Start-->
                        <h3>Trip Schedule</h3>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 1
                                </a>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 2
                                </a>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 3
                                </a>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 4
                                </a>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 5
                                </a>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 6
                                </a>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 7
                                </a>
                            </div>
                            <div id="collapse7" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 8
                                </a>
                            </div>
                            <div id="collapse8" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 9
                                </a>
                            </div>
                            <div id="collapse9" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 10
                                </a>
                            </div>
                            <div id="collapse10" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 11
                                </a>
                            </div>
                            <div id="collapse11" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-angle-down"></i> Day 12
                                </a>
                            </div>
                            <div id="collapse12" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arrive Gorakhpur and drive to Pokhara Overnight stay in Pokhara.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Trip Schedule Start-->

                        <!-- Include and Exclude -->
                        <h3>Include and Exclude</h3>
                        <h5>Your Cost Includes:</h5>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">
                                <i class="fa fa-check"></i> Item 1
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <i class="fa fa-check"></i> Item 2
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <i class="fa fa-check"></i> Item 3
                            </li>
                        </ul>
                        <h5>Your Cost Excludes:</h5>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-danger">
                                <i class="fa fa-times"></i> Item 4
                            </li>
                            <li class="list-group-item list-group-item-danger">
                                <i class="fa fa-times"></i> Item 5
                            </li>
                            <li class="list-group-item list-group-item-danger">
                                <i class="fa fa-times"></i> Item 6
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 short"> <!-- 30% width column -->
                        <p>Other information goes here.</p>
                    </div>
                </div>
            </div>
        </div>

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