@extends('layouts.bodytemplate')
@section('title',"Kailash Tour | RadhaKrishnaHolidays")
@section('content')
<!-- Annapurna Region -->
<div class="trekdestination">
    <div class="container">
        <h2 class="titles">Kailash Tour</h2>
        <div class="row">
            <!-- First column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Holy Mount Kailash Yatra Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/pach-pokhari-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Second column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Mount kailash and Mansarovar Yatra Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/manaslu-circuit-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection