@extends('layouts.bodytemplate')
@section('title',"Contact | RadhaKrishnaHolidays")
@section('content')
<!-- Contact Us -->
<div class="contact">
    <div class="container">
        <h2 class="titles">Contact Us</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 my-4">
                <div class="card box addressbox">
                    <div class="card-body">
                        <div class="box-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3 class="box-title my-4">Head Office</h3>
                        <p class="box-text">Devkota Chowk, Sonauli Road, Bhairahawa, Nepal</p>
                        <p class="box-text"><i class="fa fa-phone-square"></i> Tel: O71-525354</p>
                        <p class="box-text"><i class="fa fa-mobile"></i> Mobile No: +977-9804454054 , +977-9847540061</p>
                        <p class="box-text"><i class="fa fa-envelope"></i> Email: radhakrishnaholidays@gmail.com</p>
                        <p class="box-text"><a href=""><i class="fa fa-facebook"></i></a> | <a href=""><i class="fa fa-instagram"></i></a> | <a href=""><i class="fa fa-twitter"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-4">
                <div class="card box addressbox">
                    <div class="card-body">
                        <div class="box-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3 class="box-title my-4">Branch Office</h3>
                        <p class="box-text">Kamalpokhari, Kathmandu, Nepal</p>
                        <p class="box-text"><i class="fa fa-phone-square"></i> Tel: 01-4701058</p>
                        <p class="box-text"><i class="fa fa-mobile"></i> Mobile No: +977-9804454054 , +977-9847540061</p>
                        <p class="box-text"><i class="fa fa-envelope"></i> Email: radhakrishnaholidaysktm@gmail.com</p>
                        <p class="box-text"><a href=""><i class="fa fa-facebook"></i></a> | <a href=""><i class="fa fa-instagram"></i></a> | <a href=""><i class="fa fa-twitter"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-4">
                <div class="card box addressbox">
                    <div class="card-body">
                        <div class="box-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3 class="box-title my-4">Sales Office</h3>
                        <p class="box-text">Devkota Chowk, Sonauli Road, Bhairahawa, Nepal</p>
                        <p class="box-text"><i class="fa fa-phone-square"></i> Tel: O71-525354</p>
                        <p class="box-text"><i class="fa fa-mobile"></i> Mobile No: +977-9801006141 , +977-9801006142</p>
                        <p class="box-text"><i class="fa fa-envelope"></i> Email: radhakrishnaholidaysgkp@gmail.com</p>
                        <p class="box-text"><a href=""><i class="fa fa-facebook"></i></a> | <a href=""><i class="fa fa-instagram"></i></a> | <a href=""><i class="fa fa-twitter"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Get in Touch -->
<div class="contacttogetintouch">
    <section id="get-in-touch">
        <div class="container py-5" style="background-color:#d8f0ff; border-radius:50px; border: 2px solid #003048;">
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
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 my-3">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-3">
                            <textarea class="form-control" placeholder="Your Message *" id="message" rows="5" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <button type="submit" class="buttonclick">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Google Map -->
<div class="map-location">
    <section id="contact">
        <div class="container">
            <div class="row">
                <!-- Map Column -->
                <div class="col-lg-8 my-4">
                    <!-- Embedded Google Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2446.315888109812!2d-0.1258063838705247!3d51.508039779635935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604cfd9a6e9a5%3A0x1fd6f8533e3d06f8!2sBig%20Ben!5e0!3m2!1sen!2sus!4v1645551032865!5m2!1sen!2sus" width="100%" height="450" style="border:3px solid #003048; border-radius:50px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- Contact Details Column -->
                <div class="col-lg-4 my-4">
                    <h4>Connect with us</h4>
                    <p><a href="#">Facebook</a></p>
                    <p><a href="#">Instagram</a></p>
                    <p><a href="#">Twitter</a></p>
                    <h4>Hours of Operation</h4>
                    <p>Monday-Friday: 9am-5pm</p>
                    <p>Saturday-Sunday: Closed</p>
                    <h4>Frequently Asked Questions</h4>
                    <p><a href="#">Click here for FAQs</a></p>
                    <h4>Privacy Policy</h4>
                    <p><a href="#">Click here for our privacy policy</a></p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection