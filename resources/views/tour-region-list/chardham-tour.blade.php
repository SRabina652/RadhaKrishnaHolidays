@extends('layouts.bodytemplate')
@section('title',"Chardham Tour | RadhaKrishnaHolidays")
@section('content')
<!-- Annapurna Region -->
<div class="trekdestination">
    <div class="container">
        <h2 class="titles">Chardham Tour</h2>
        <div class="row">
            <!-- First column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Chardham Yatra Tour</h4>
                        <section><a class="buttonclick" href="{{ url('/pach-pokhari-trek-detail') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection