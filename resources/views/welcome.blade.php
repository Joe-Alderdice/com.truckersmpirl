@extends('layouts.site', ['pageTitle' => 'Welcome'])

@section('content')

<!-- Masthead -->
<header class="masthead text-white text-center" style="background: url({{ $randomImage }}) no-repeat center center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-5">Welcome to the TruckersMP IRL meet up project!</h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            </div>
        </div>
    </div>
</header>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <span style="color: #007bff; display: inline-block; text-align: center;">
                            <i class="far fa-calendar-alt fa-2x"></i>
                        </span>
                    </div>
                    <h3>View all future meetups.</h3>
                    <p class="lead mb-0">With the fully dynamic calendar, you can view all the future meetups and tell others you're attending!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <span style="color: #007bff; display: inline-block; text-align: center;">
                            <i class="far fa-handshake fa-2x"></i>
                        </span>
                    </div>
                    <h3>Find Meet-Ups!</h3>
                    <p class="lead mb-0">The easiest way for the TruckersMP community to meet up with others!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <span style="color: #007bff; display: inline-block; text-align: center;">
                            <i class="fas fa-users fa-2x"></i>
                        </span>
                    </div>
                    <h3>Join the other {{ $userCount }} users!</h3>
                    <p class="lead mb-0">We've currently got {{ $userCount }} users signed up and it will only go up!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcases -->
{{-- <section class="showcase">
    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img"
                style="background-image: url('img/bg-showcase-1.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Fully Responsive Design</h2>
                <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look
                    great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Updated For Bootstrap 4</h2>
                <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way
                    in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap
                    4!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img"
                style="background-image: url('img/bg-showcase-3.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Easy to Use &amp; Customize</h2>
                <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some
                    deeper customization options. Out of the box, just add your content and images, and your new landing
                    page will be ready to go!</p>
            </div>
        </div>
    </div>
</section> --}}
@endsection
