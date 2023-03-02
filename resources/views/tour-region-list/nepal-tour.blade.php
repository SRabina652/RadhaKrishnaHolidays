@extends('layouts.bodytemplate')
@section('title',"Nepal Tour | RadhaKrishnaHolidays")
@section('content')
<!-- Annapurna Region -->
<div class="trekdestination">
    <div class="container">
        <h2 class="titles">Nepal Tour</h2>
        <div class="row">
            <!-- First column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Kathmandu Everest Base Camp Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/pach-pokhari-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Second column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Kathmandu-Pokhara-Muktinath Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/manaslu-circuit-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Third column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Rara lake and Gorakhpur Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/limi-valley-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Fourth column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Chitwan and Gorakhpur Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/nyinba-valley-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Fifth column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Holy Gosaikund Heli Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/lower-mustang-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Sixth column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Lumbini Pilgrimage Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/saipal-base-camp-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection