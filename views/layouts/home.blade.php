@extends('layouts.main')
@section('content')
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="color: #fff; background: none">
        <div class="container border-bottom">
            <h1 class="display-3">Hello, {{ Auth::user()->name }}!</h1>
            <p>We developed a Contactless Entry System using the Raspberry Pi. Teachers, students and visitors
                can use the unique QR Code in the system after verification of email, acceptance and oath regarding health provided by the website.
                This system is available 24 hours.</p>
            <p>The study is being conducted at Mariano Marcos State University, College of
                Engineering Batac City, Ilocos Norte.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row" style="color: #fff">
            <div class="col-md-4">
                <h2>Hydroponic System</h2>
                <p>The study
                    focused on Nutrient Film Technique (NFT) as a growing method and was
                    limited to lettuce as the plant sample. The researchers also concentrated on the
                    lettuce crops performance, which was exposed through existing hydroponics
                    and enhanced automated indoor hydroponics.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>360° Virtual Tour</h2>
                <p>The system was only be limited to the college&#39;s virtual
                    tour and its facilities, classrooms, and environment. It is hosted via cloud hosting and
                    Raspberry Pi web server. The cloud hosting allows online access, while the Raspberry PI web server offers offline access via kiosk. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4    ">
                <h2>Warning System</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilid ligula porta id ligula porta id ligula porta isis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus acfelis euismod semper id ligula portased odio dui.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->

</main>

<footer class="container" style="color: #fff">
    <p>&copy; The_deps 2021-2022</p>
</footer>

@endsection