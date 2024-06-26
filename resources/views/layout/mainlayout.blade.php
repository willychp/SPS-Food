<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SPS Food | @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js"
        integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/alertify.css">
    <link rel="stylesheet" href="/css/default.min.css">
    <link rel="stylesheet" href="/css/venobox.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css" media="screen" />
</head>

<body style="background-image: url('/img/bg/BG-01.jpg')">

    <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="/img/logo/SPS.png" alt="">
    </div>

    <!-- Search Wrapper -->
    {{-- <div class="search-wrapper">
        <!-- Close Btn -->
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Type any keywords...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- ##### Header Area Start ##### -->
    <header class="header-area" style="opacity: 0.9">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <!-- Breaking News -->
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">SPS FOOD</a></li>
                                    <li><a href="#">Selalu Padamu</a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Top Social Info -->
                    <div class="col-12 col-sm-6">
                        <div class="top-social-info text-right">
                            <a href="https://www.instagram.com/sps.food/?igshid=YmMyMTA2M2Y%3D" target="_blank"><i
                                    class="fa-brands fa-instagram fa-beat" aria-hidden="true"></i></a>

                            <a href="https://www.facebook.com/spsfood/" target="_blank"><i
                                    class="fa-brands fa-facebook fa-beat" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter fa-beat" aria-hidden="true"></i></a>
                            <a href="https://id.linkedin.com/company/ptsinarpangansejahtera" target="_blank"><i
                                    class="fa-brands fa-linkedin fa-beat" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img style="max-width: 120px" src="/img/logo/SPS.png"
                                alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="{{ 'home' == request()->path() ? 'active' : '' }}"><a
                                            href="/home">BERANDA</a></li>
                                    <li class="{{ 'receipe' == request()->path() ? 'active' : '' }}"><a
                                            href="/receipe">RESEP</a></li>
                                    <li class="{{ 'product' == request()->path() ? 'active' : '' }}"><a
                                            href="/product">PRODUK</a></li>
                                    <li class="{{ 'about' == request()->path() ? 'active' : '' }}"><a
                                            href="/about">TENTANG KAMI</a></li>
                                    <li class="{{ 'contact' == request()->path() ? 'active' : '' }}"><a
                                            href="/contact">HUBUNGI KAMI</a></li>

                                </ul>

                                <!-- Newsletter Form -->
                                @if (session('login') == true)
                                    <div class="search-btn">
                                        <a href="/logout">
                                            <i class="fa-solid fa-arrow-right-from-bracket fa-xl"></i>

                                        </a>

                                    </div>
                                @endif

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    @section('content')
    @show

    <!-- ##### Follow Us Instagram Area Start ##### -->
    {{-- <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Follow Us Instragram</h5>
                </div>
            </div>
        </div>
        <!-- Instagram Feeds -->
        <div class="insta-feeds d-flex flex-wrap">
            <!-- Single Insta Feeds -->
             @foreach ($ig as $ig)
                <div class="single-insta-feeds">
                    <img src="/storage/public/{{ $ig->foto }}" alt="">
                    <!-- Icon -->
                    <div class="insta-icon">
                        <a href="{{ $ig->link }}" target="_blank"><i class="fa-brands fa-instagram fa-beat"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            @endforeach --}}

    {{-- <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="/img/ig/default.png" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="https://www.instagram.com/reel/CckdJXOhxQ1/?utm_source=ig_web_copy_link"
                        target="_blank"><i class="fa-brands fa-instagram fa-beat" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="/img/ig/Japchae.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa-brands fa-instagram fa-beat" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="/img/bg/Martabak Bihun Telor Asin.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="https://www.instagram.com/reel/Cdsaqx9AvCx/?utm_source=ig_web_copy_link"
                        target="_blank"><i class="fa-brands fa-instagram fa-beat" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="/img/bg/Spicy Bee Hoon Malaka.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="https://www.instagram.com/reel/CfS5EQVBplr/?utm_source=ig_web_copy_link"
                        target="_blank"><i class="fa-brands fa-instagram fa-beat" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="/img/bg/Vegetarian Spring Roll.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="https://www.instagram.com/reel/Cd7MJB6h77W/?utm_source=ig_web_copy_link"
                        target="_blank"><i class="fa-brands fa-instagram fa-beat" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="/img/bg/Szechuan Beehoon Claypot_Moment.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="https://www.instagram.com/reel/CgtcMclg5nn/?utm_source=ig_web_copy_link"
                        target="_blank"><i class="fa-brands fa-instagram fa-beat" aria-hidden="true"></i></a>
                </div>
            </div> 
        </div>
    </div> --}}
    <!-- ##### Follow Us Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="row col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="col-4 footer-logo">
                        <a href="/home"><img style="max-width: 120px" src="/img/logo/SPS.png"
                                alt=""></a><br>
                        <p class="alamat"><a href="https://goo.gl/maps/qxNsq8SJUTEqiALa8" target=”_blank”>
                                <i class="fa-solid fa-location-dot"></i>
                                Jl. Wicaksono, Bangil, Gn. Gangsir, Kec. Beji,
                                <br>
                                Pasuruan, Jawa Timur 67154
                                <br>
                                Pabrik SPS Food
                            </a>

                        </p>
                    </div>
                    <div class=" col-5 footer-social-info text-center">
                        <a href="https://www.instagram.com/sps.food/?igshid=YmMyMTA2M2Y%3D" target="_blank"><i
                                class="fa-brands fa-instagram fa-beat" aria-hidden="true"></i></a>

                        <a href="https://www.facebook.com/spsfood/" target="_blank"><i
                                class="fa-brands fa-facebook fa-beat" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter fa-beat" aria-hidden="true"></i></a>
                        <a href="https://id.linkedin.com/company/ptsinarpangansejahtera" target="_blank"><i
                                class="fa-brands fa-linkedin fa-beat" aria-hidden="true"></i></a>
                        <br>
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <a href="/login" style="margin: 0">
                                Copyright &copy;
                            </a>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <!-- Footer Logo -->

                    <!-- Copywrite -->
                    <div class=" col-3 footer-logo">
                        <i class="fa-regular fa-envelope fa-rotate-by fa-2xl icon"
                            style="--fa-rotate-angle: 340deg;font-size: 48px; margin-left: -60px"></i>

                        <p class="alamat1">
                            <br>

                            <span>Layanan Konsumen</span>
                            <span style="font-size: 13px;margin">Whatsapp/Call/SMS : 0888 388 0888</span>

                            <span>Email : spspeduli@gmail.com</span>




                            <br>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <!-- All Plugins js -->
    <script src="/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
    <script src="/js/alertify.js"></script>
    <script type="text/javascript" src="/js/venobox.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>



</body>

</html>
