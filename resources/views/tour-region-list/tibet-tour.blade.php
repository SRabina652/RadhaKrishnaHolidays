@extends('layouts.bodytemplate')
@section('title',"Tibet Tour | RadhaKrishnaHolidays")
@section('content')
<!-- Annapurna Region -->
<div class="trekdestination">
    <div class="container">
        <h2 class="titles">Tibet Tour</h2>
        <div class="row">
            <!-- First column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Tibet Motorbike Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/pach-pokhari-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Second column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Lhasa Namtso Lake Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/manaslu-circuit-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Third column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Mount Kailash via Helicopter Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/limi-valley-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Fourth column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Mount Kailash Inner Parikrama Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/nyinba-valley-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Fifth column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Mount Kailash via Simikot Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/lower-mustang-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Sixth column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Holy Kailash and Manasarovar Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/saipal-base-camp-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection