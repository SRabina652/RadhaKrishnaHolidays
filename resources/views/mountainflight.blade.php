@extends('layouts.bodytemplate')
@section('title',"Mountain Flight | RadhaKrishnaHolidays")
@section('content')
<!-- Mountain Flight -->
<div class="mountainflight">
    <div class="container">
        <h2 class="titles">Mountain Flight</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="sticky-top">
                    <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link my-1" href="#item-1">1. Mountain Flight Nepal</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ms-3 my-1" href="#item-1-1">1.1 Highlight</a>
                                <a class="nav-link ms-3 my-1" href="#item-1-2">1.2 Description</a>
                                <a class="nav-link ms-3 my-1" href="#item-1-3">1.3 Includes</a>
                                <a class="nav-link ms-3 my-1" href="#item-1-3">1.4 Booking Information</a>
                            </nav>
                            <a class="nav-link my-1" href="#item-2">2. Mountain Seen From This Flight</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ms-3 my-1" href="#item-2-1">2.1 Langtang (7234m)</a>
                                <a class="nav-link ms-3 my-1" href="#item-2-2">2.2 Gosainthan (8013m)</a>
                                <a class="nav-link ms-3 my-1" href="#item-2-3">2.3 DorjeLakpa (6975m)</a>
                                <a class="nav-link ms-3 my-1" href="#item-2-4">2.4 Gauri-Shankar (7134m)</a>
                                <a class="nav-link ms-3 my-1" href="#item-2-5">2.5 Lhotse (8516m)</a>
                                <a class="nav-link ms-3 my-1" href="#item-2-6">2.6 Mount Everest (8848.86m)</a>
                            </nav>
                        </nav>
                    </nav>
                </div>

            </div>

            <div class="col-md-8">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                    <div id="item-1">
                        <!------ Mountain Flight ------>
                        <h4><b>1. Mountain Flight Nepal</b></h4>
                        <img src="{{ asset('images/homepage/Home-hero-img.jpg') }}" class="img-fluid" alt="Your Image">
                        <p>If you are in Kathmandu, Nepal then you cannot miss this popular optional Everest Mountain Flight trip. We will pick you up early morning (5:30 AM) and drive to the Kathmandu Airport. You will be in a plane for 1 hour experiencing the spectacular view of highest mountains in the world.</p>
                    </div>
                    <div id="item-1-1">
                        <h5>1.1 Highlight</h5>
                        <p>
                        <ul>
                            <li class="list-group-item"><i class="fa fa-long-arrow-right"></i>Close view of Mount Everest from the air</li>
                            <li class="list-group-item"><i class="fa fa-long-arrow-right"></i>Breath-taking views of World’s Top Mountains, Lakes, & Glaciers</li>
                            <li class="list-group-item"><i class="fa fa-long-arrow-right"></i>Guaranteed with windows seat with Pilot narration</li>
                            <li class="list-group-item"><i class="fa fa-long-arrow-right"></i>Special certificate from the airline about completion of Mt. Everest Flight</li>
                        </ul>
                        </p>
                    </div>
                    <div id="item-1-2">
                        <h5>1.2 Description</h5>
                        <p>In this spectacular Everest Mountain Flight – Nepal, you will fly to the top of the world’s largest mountain range giving you a breathtaking scenic flight for 1-hour. You will see Mount Everest, Mount Lhotse (4th highest), Mount Makalu (5th highest) and many other peaks which are listed below. The scenic flight departs from the domestic airport in Kathmandu and takes place early in the morning to catch the best light. Please find your schedule below:</p>
                    </div>
                    <div id="item-1-3">
                        <h5>1.3 Includes</h5>
                        <p>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">
                                <i class="fa fa-check"></i> Everest Mountain flight ticket for 1 hour
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <i class="fa fa-check"></i> Both way Airport Transfer by private car from Hotel to Airport
                            </li>
                            <li class="list-group-item list-group-item-success">
                                <i class="fa fa-check"></i> Airport departure tax
                            </li>
                        </ul>
                        </p>
                    </div>
                    <div id="item-1-4">
                        <h5>1.4 Booking Information</h5>
                        <p>For booking confirmation we need advance payment or full payment along with name of passengers and date of the flight. If there is remaining amount then we must receive it 48 hours before your flight time. We will purchase ticket only after full payment is done.</p>
                    </div>
                    <div id="item-2">
                        <h4><b>2. Mountain Seen From This Flight</b></h4>
                    </div>
                    <div id="item-2-1">
                        <h5>2.1 Langtang (7234m)</h5>
                        <p>The first mountain, which can be seen, is Langtang. The valley of Langtang, which is not visible from the mountain flight, is considered to be the most beautiful in the whole Himalayan region.</p>
                    </div>
                    <div id="item-2-2">
                        <h5>2.2 Gosainthan (8013m)</h5>
                        <p>The mountain lies on the Nepal - Tibetan border. Tibetan name for this mountain is Shisapangma. She is related with many Hindu Mythologies especially of Shiva.</p>
                    </div>
                    <div id="item-2-3">
                        <h5>2.3 DorjeLakpa (6975m)</h5>
                        <p>This mountain has a Tibetan name, which means "the mountains of many sacred Thunderbolts". This mountain is considered to be holy mountain for Buddhists and climbing permission was given only in 1964, and it was not climbed until 1981.</p>
                    </div>
                    <div id="item-2-4">
                        <h5>2.4 Gauri-Sanker (7134m)</h5>
                        <p>This single mountain has two peaks and also has two names together because the Hindus believe that the mountain looks like the pair of Gods Shiva and Gouri. This holy mountain was restricted till 1977 for the climbers. It was only in 1979 that an American - Nepal group reached the summit.</p>
                    </div>
                    <div id="item-2-5">
                        <h5>2.5 Lhotse (8516m)</h5>
                        <p>As this mountain lies to the south of Everest, name given by the Sherpas is Lhotse, which means" South Peak". The first ascent of this mountain took place in 1956 by the Swiss.</p>
                    </div>
                    <div id="item-2-6">
                        <h5>2.5 Mount Everest (8848m)</h5>
                        <p>This Mountain was discovered in 1852 and is the highest mountain of the world, is named after Sir George Everest, and English surveyor. Sagarmatha, top of the universe, is the name giver by Nepal which means, "mother of the world" and Qomolongma in Tibetan. Sir Edmund Hillary and Tenzing Norgey Sherpa were first to climb Everest on May 25, 1953. As a coronation gift to Queen Elizabeth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection