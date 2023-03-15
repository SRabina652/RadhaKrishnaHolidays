@extends('layouts.bodytemplate')
@section('title',"Tour Package | RadhaKrishnaHolidays")
@section('content')
<!-- Our Trekking Destination -->
<div class="trekdestination">
    <div class="container">
        <h2 class="titles">Our Tour Destination</h2>
        <div class="row">
            <!-- First column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Nepal Tour</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/nepal-tour') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Second column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolkha.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">India Tour</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/india-tour') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Third column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolpa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Bhutan Tour</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/bhutan-tour') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Fourth column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Everest.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Tibet Tour</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/tibet-tour') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Five column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Outbound Tour</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/outbound-tour') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Six column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolkha.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Kailash Tour</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/kailash-tour') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Seven column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolpa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Gangtok Tour</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/non-tourist-region-trek') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Eight column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolpa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Chardham Tour</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/chardham-tour') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection