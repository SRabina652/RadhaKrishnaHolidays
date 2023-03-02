@extends('layouts.bodytemplate')
@section('title',"RadhaKrishnaHolidays")
@section('content')
<!-- HomeHero -->
<div class="homehero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 division2">
                <h1>Welcome To Radha Krishna Holidays</h1>
                <p>Tour operator/agency for Nepal, Tibet and Bhutan in Kathmandu. We provide quality trips for our beloved customers in reasonable cost. As an adventure travel company we offer a wide range of tour and travel activities such as Nepal trekking, hiking, culture and sightseeing tour with professional guides (who can clearly describe the history and religious significant of the places), walking holidays in the low altitude to higher mountain peaks, wildlife tours, rafting, day hiking and many more. Our major operation destinations are Nepal, Tibet, Bhutan and kailash mansarovar yatra.</p>
                <a class="buttonclick" href="#" role="button">Explore Now &#8594;</a>
            </div>
            <div class="col-md-6 my-auto division2">
                <img src="{{ asset('images/homepage/Home-hero-img.jpg') }}" class="w-100" alt="...">
            </div>
        </div>
    </div>
</div>

<!-- Our Tour Destination -->
<div class="tourdestination">
    <div class="container text-center">
        <h2 class="titles">Our Tour Destination</h2>
        <div class="row">
            <div class="col">
                <div><a href="" class="btn-list">Nepal</a></div>
            </div>
            <div class="col">
                <div><a href="" class="btn-list">India</a></div>
            </div>
            <div class="col">
                <div><a href="" class="btn-list">Bhutan</a></div>
            </div>
            <div class="col">
                <div><a href="" class="btn-list">Tibet</a></div>
            </div>
            <div class="col">
                <div><a href="" class="btn-list">Outbound</a></div>
            </div>
        </div>

        <!-- Our Tour Destination -->
        <div class="tourdestinationdescription">
            <div class="row">
                <div class="slider">
                    <div class="slides">
                        <!--radio buttons start-->
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <!--radio buttons end-->

                        <!--slide images start-->
                        <div class="slide first">
                            <div class="tourdestinationdescription">
                                <div class="row">
                                    <div class="col-md-6 my-auto division2">
                                        <img src="images/homepage/Country-Nepal.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 division2">
                                        <h1>Nepal Tour</h1>
                                        <p>Situated in the lap of the mighty Himalayas, the souvenir nation of Nepal is blessed with rich history and bottomless natural beauty. A travellers paradise overfilled with numerous opportunities for sightseeing travel, fascinating geographical marvel, every corner of Nepal tend to mesmerize the foreign visitors with the authentic and varied travel experiences that is purely irresistible as time goes by.</p>
                                        <a class="buttonclick" href="#" role="button">Explore Now &#8594;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="tourdestinationdescription">
                                <div class="row">
                                    <div class="col-md-6 my-auto division2">
                                        <img src="images/homepage/Country-India.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 division2">
                                        <h1>India Tour</h1>
                                        <p>Situated in the lap of the mighty Himalayas, the souvenir nation of Nepal is blessed with rich history and bottomless natural beauty. A travellers paradise overfilled with numerous opportunities for sightseeing travel, fascinating geographical marvel, every corner of Nepal tend to mesmerize the foreign visitors with the authentic and varied travel experiences that is purely irresistible as time goes by.</p>
                                        <a class="buttonclick" href="#" role="button">Explore Now &#8594;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="tourdestinationdescription">
                                <div class="row">
                                    <div class="col-md-6 my-auto division2">
                                        <img src="images/homepage/Country-Bhutan.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 division2">
                                        <h1>Bhutan Tour</h1>
                                        <p>Situated in the lap of the mighty Himalayas, the souvenir nation of Nepal is blessed with rich history and bottomless natural beauty. A travellers paradise overfilled with numerous opportunities for sightseeing travel, fascinating geographical marvel, every corner of Nepal tend to mesmerize the foreign visitors with the authentic and varied travel experiences that is purely irresistible as time goes by.</p>
                                        <a class="buttonclick" href="#" role="button">Explore Now &#8594;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="tourdestinationdescription">
                                <div class="row">
                                    <div class="col-md-6 my-auto division2">
                                        <img src="images/homepage/Country-Tibet.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 division2">
                                        <h1>Tibet Tour</h1>
                                        <p>Situated in the lap of the mighty Himalayas, the souvenir nation of Nepal is blessed with rich history and bottomless natural beauty. A travellers paradise overfilled with numerous opportunities for sightseeing travel, fascinating geographical marvel, every corner of Nepal tend to mesmerize the foreign visitors with the authentic and varied travel experiences that is purely irresistible as time goes by.</p>
                                        <a class="buttonclick" href="#" role="button">Explore Now &#8594;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--slide images end-->
                        <!--automatic navigation start-->
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                        <!--automatic navigation end-->
                    </div>
                    <!--manual navigation start-->
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                    <!--manual navigation end-->

                    <!--image slider end-->

                    <script type="text/javascript">
                        var counter = 1;
                        setInterval(function() {
                            document.getElementById('radio' + counter).checked = true;
                            counter++;
                            if (counter > 4) {
                                counter = 1;
                            }
                        }, 5000);
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Trekking Destination -->
<div class="trekdestination">
    <div class="container">
        <h2 class="titles">Our Trekking Destination</h2>
        <div class="row">
            <!-- First column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Annapurna</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="#" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Second column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolkha.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Dolkha</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="#" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Third column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolpa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Dolpa</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="#" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Fourth column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Everest.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Everest</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="#" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
        </div>
        <p><a class="buttonclick" href="#" role="button">View All &#8594;</a></p>
    </div>
</div>

<!-- Testimonial -->
<div class="testimonial">
    <div class="smallcontainer">
        <h2 class="titles">Testimonial</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="testimonialcontent">
                    <div class="border p-3 border3">
                        <i class="fa fa-quote-left"></i>
                        <p>Gladly saying, you guys are excellent. When I decided to make a Bhutan trip with you, I made the best choice. Hope to have another trip with you guys.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="images/homepage/Testimonial-human2.jpg" alt="">
                        <h3>Mr. Aashish Jha</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonialcontent">
                    <div class="border p-3 border3">
                        <i class="fa fa-quote-left"></i>
                        <p>Gladly saying, you guys are excellent. When I decided to make a Bhutan trip with you, I made the best choice. Hope to have another trip with you guys.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="images/homepage/Testimonial-human2.jpg" alt="">
                        <h3>Mr. Aashish Jha</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonialcontent">
                    <div class="border p-3 border3">
                        <i class="fa fa-quote-left"></i>
                        <p>Gladly saying, you guys are excellent. When I decided to make a Bhutan trip with you, I made the best choice. Hope to have another trip with you guys.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="images/homepage/Testimonial-human2.jpg" alt="">
                        <h3>Mr. Aashish Jha</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Get in Touch -->
<section id="get-in-touch" class="bg-light py-5">
    <div class="container">
        <h2 class="titles">Get in Touch</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto my-3 text-center">
                <h6>Send us a message and we will respond within 24 hours.</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-6 my-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6 my-3">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <textarea class="form-control" placeholder="Your Message *" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <button type="submit" class="buttonclick">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-lg-4 mx-auto text-center">
                <i class="fa fa-phone"></i>
                <p>+1 (555) 123-4567</p>
            </div>
            <div class="col-lg-4 mx-auto text-center">
                <i class="fa fa-envelope"></i>
                <p><a class="mail" href="mailto:info@travel.com">info@travel.com</a></p>
            </div>
        </div>
    </div>
</section>
@endsection