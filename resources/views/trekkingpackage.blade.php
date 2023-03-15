@extends('layouts.bodytemplate')
@section('title',"Trekking Package | RadhaKrishnaHolidays")
@section('content')
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
                        <h4 class="card-title">Annapurna Region</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/annapurna-region-trek') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Second column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolkha.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Dolkha Region</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/dolkha-region-trek') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Third column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolpa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Dolpa Region</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/dolpa-region-trek') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Fourth column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Everest.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Everest Region</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/everest-region-trek') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Five column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Annapurna.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Kanchenjunga Region</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/kanchenjunga-region-trek') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Six column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolkha.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Langtang Region</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/langtang-region-trek') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
            <!-- Seven column -->
            <div class="col-sm-6 col-md-3 mb-3 division4">
                <div class="card">
                    <img src="images/homepage/Trek-Dolpa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Non-Tourist Region</h4>
                        <p class="card-text">Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
                        <section><a class="buttonclick" href="{{ url('/non-tourist-region-trek') }}" role="button">Learn More &#8594;</a></section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection