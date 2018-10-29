<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <!-- Main Container -->
    <div class="main-container">
        <!-- Header -->
        <header class="header-main">
            <!-- Logo Block -->
            <div class="middle-header container-fluid ">
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 logo-block pull-left">
                            <a href="#" title="Logo"><img src="images/logo.png" alt="Logo" /></a>
                        </div>
                        <div class="col-md-10 text-right pull-right">
                            <div class="location">
                                <h3><img src="images/location-ic.png" alt="Location" /> Adresse</h3>
                                <p>29 Rue Abbé Philippe le Gall, 56400 Auray</p>
                            </div>
                            <div class="phone">
                                <h3><img src="images/phone-ic.png" alt="phone" /> Téléphone</h3>
                                <p>02 97 24 04 51</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Container -->
            </div><!-- Logo Block /- -->
            <!-- Navigation -->
            <nav class="navbar ow-navigation">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                                aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html">Accueil</a></li>
                                <li><a href="about.html">Les médecins</a></li>
                                <li><a href="services.html">Les examens</a></li>
                                <li><a href="team.html">F.A.Q</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Banner Section -->
        <div id="home-banner" class="container-fluid banner-section home-banner">
            <!-- Container -->
            <div class="container accueil">
                <div class="col-md-6 col-sm-6">
                    <div class="banner-left">
                        <h3>Cardiologie <br>& <br> Angiologie</h3>
                        <p>29, rue Abbé Philippe Le Gall <br> 56400 Auray</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="banner-right">
                        <img src="../images/clinic.jpg" alt="banner-main" />
                    </div>
                </div>
            </div><!-- Container /- -->

            <!-- Shape -->
            <div class="banner-shape container-fluid">
                <div class="col-md-6 col-sm-6 col-xs-6 shape-left">
                    <div class="left-shape-blue">
                        <svg width="100%" height="100%">
                            <clipPath id="clipPolygon2" clipPathUnits="objectBoundingBox">
                                <polygon points="0 0, 0 100, 120 100, 0 0"></polygon>
                            </clipPath>
                        </svg>
                    </div>
                    <div class="left-shape">
                        <svg width="100%" height="100%">
                            <clipPath id="clipPolygon1" clipPathUnits="objectBoundingBox">
                                <polygon points="0 0, 0 100, 100 100, 0 0"></polygon>
                            </clipPath>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 shape-right">
                    <div class="right-shape-blue">
                        <svg width="100%" height="100%">
                            <clipPath id="clipPolygon3" clipPathUnits="objectBoundingBox">
                                <polygon points="1 0.2, 0 1, 0 0.835, 1 0"></polygon>
                            </clipPath>
                        </svg>
                    </div>
                    <div class="right-shape">
                        <svg width="100%" height="100%">
                            <clipPath id="clipPolygon4" clipPathUnits="objectBoundingBox">
                                <polygon points="1 0, 0 1, 100 100, 100 0"></polygon>
                            </clipPath>
                        </svg>
                    </div>
                </div>
            </div><!-- Shape /- -->
        </div><!-- Banner Section /- -->

        <!-- Message Borad -->
        <div id="message-borad" class="container-fluid  message-borad">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Emargency Case -->
                    <div class="col-md-6 col-sm-6 emargency-case">
                        <div class="col-md-6 message-block no-left-padding">
                            <h3>CARDIOLOGUES & ANGIOLOGUES</h3>
                            <p>Une équipe de cardiologues et d'angiologues vous accueille pour une prise en charge
                                globale de vos pathologies cardiaques et des vaisseaux.
                                Tous les médecins du centre sont conventionnés, secteur 1, sans dépassement
                                d'honoraire.</p>
                            {{-- <a href="#">More Details<i class="fa fa-caret-right"></i></a> --}}
                        </div>
                        <div class="col-md-6 message-block no-right-padding">
                            <h3>URGENCES</h3>
                            <p>Les urgences sont assurées quotidiennement sur demande téléphonique de votre médecin.
                                Accès PMR (Personne à Mobilité Réduite) : ascenseur depuis le parking - 8 places de
                                parking dont 2 handicapées.</p>
                            {{-- <a href="#">More Details<i class="fa fa-caret-right"></i></a> --}}
                        </div>
                    </div><!-- Emargency Case /- -->
                    <!-- Opening Hours -->
                    <div class="col-md-6 col-sm-6 opening-hours">
                        <div class="col-md-12 message-block ">
                            <h3>Horaires d'ouverture</h3>
                            <ul>
                                <li>Lundi au vendredi<span class="pull-right">8h - 18h</span></li>
                                <li>Samedi<span class="pull-right">8h - 13h</span></li>
                            </ul>
                        </div>

                    </div><!-- Opening Hours /- -->
                </div>
            </div><!-- Container /- -->
        </div><!-- Message Borad /- -->
        <!-- Call Out -->
        <div id="call-out" class="container-fluid call-out">
            <!-- Container -->
            <div class="container">
                <div class="call-out-content row">
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <h3>Are You Ready to <span>Buy this theme!</span></h3>
                        <p>Blanditiis praesentium voluptatum deleniti atque soluta nobis est eligendi optio cumque
                            nihil.</p>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <a href="#" title="Purchase Now">Purchase Now</a>
                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- Call Out /- -->
        <!-- What We Do Best -->

        {{-- <div id="what-we-do-best" class="container  what-we-do-best"> --}}
            <!-- Section Header -->
            {{-- <div class="section-header"> --}}
                {{-- <h3>Les examens</h3> --}}
                {{-- </div><!-- Section Header /- --> --}}

            {{-- <div class="col-md-6 ">
                <div class="what-we-do-block">
                    <img src="images/what-we-do-best-block-bg.jpg" alt="what-we-do-best" />
                    <div class="what-we-do-block-content">
                        <i><img src="images/cardiology.png" alt="Cardiology" /></i>
                        <h5>Cardiologie</h5>
                        <p>Nam libero tempore cumas soluta eligendi </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ">
                <div class="what-we-do-block">
                    <img src="images/what-we-do-best-block-bg.jpg" alt="what-we-do-best" />
                    <div class="what-we-do-block-content">
                        <i><img src="images/traumatology.png" alt="Traumatology" /></i>
                        <h5>Angiologie</h5>
                        <p>Nam libero tempore cumas soluta eligendi </p>
                    </div>
                </div> --}}


                {{--
            </div><!-- What We Do Best Right /- --> --}}
            {{--
        </div><!-- What We Do Best /- -->
        <hr> --}}
        <!-- Latest News -->
        <div class="container-fluid  latest-news">
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Les dernières actualités</h3>
                </div><!-- Section Header /- -->
                <div class="row">
                    <article class="col-md-6 col-sm-12 col-xs-12">
                        <div class="entry-header">
                            <img src="images/latest-news-2.jpg" alt="latest-news" />
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Comments<span>(18)</span></a>
                                <a href="#"><i class="fa fa-heart-o"></i>Favorite<span>(16)</span></a>
                                <a href="#"><i class="fa fa-share-alt"></i>Share Post<span>(13)</span></a>
                            </div>
                            <h3 class="entry-title"><a href="blog-post.html">Plan the most effective strategy</a></h3>
                            <div class="post-meta">
                                <a href="#" title="30th sep 2015" class="post-date">30th sep 2015</a> by
                                <a href="#" title="Mathov" class="post-admin">Mathov</a> in Hospital
                            </div>
                            <p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa dicta sunt
                                explicabo nemo enim ipsam [...] </p>
                        </div>
                    </article>
                    <article class="col-md-6 col-sm-12 col-xs-12">
                        <div class="entry-header">
                            <img src="images/latest-news-2.jpg" alt="latest-news" />
                        </div>
                        <div class="entry-content">
                            <div class="entry-meta">
                                <a href="#"><i class="fa fa-comment-o"></i>Comments<span>(18)</span></a>
                                <a href="#"><i class="fa fa-heart-o"></i>Favorite<span>(16)</span></a>
                                <a href="#"><i class="fa fa-share-alt"></i>Share Post<span>(13)</span></a>
                            </div>
                            <h3 class="entry-title"><a href="blog-post.html">Plan the most effective strategy</a></h3>
                            <div class="post-meta">
                                <a href="#" title="30th sep 2015" class="post-date">30th sep 2015</a> by
                                <a href="#" title="Mathov" class="post-admin">Mathov</a> in Hospital
                            </div>
                            <p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa dicta sunt
                                explicabo nemo enim ipsam [...] </p>
                        </div>
                    </article>
                </div>
            </div><!-- Container /- -->
        </div><!-- Latest News /- -->


        <footer class="footer-main container-fluid ">
            <!-- Container -->
            <div class="container">
                <!-- Contact Detail -->
                <div class="contact-details">
                    <div class="col-md-4 col-sm-4 address-box detail-box">
                        <i><img src="images/ftr-location.png" alt="Loactaion" /></i>
                        <h4>Centre de cardiologie</h4>
                        <p>29 Rue Abbé Philippe le Gall </p>
                        <p>56400 Auray</p>
                    </div>
                    <div class="col-md-4 col-sm-4 phone-box detail-box">
                        <i><img src="images/ftr-phone.png" alt="Phone" /></i>
                        <h4>En cas d'urgence</h4>
                        <p>Téléphone</p>
                        <p>02 97 24 04 51</p>
                    </div>
                    <div class="col-md-4 col-sm-4 mail-box detail-box">
                        <i><img src="images/ftr-email.png" alt="Email" /></i>
                        <h4>Prendre rendez-vous</h4>
                        <p>Contactez-nous par téléphone <br>
                            pendant les heures d'ouverture du cabinet</p>

                    </div>
                </diV><!-- Contact Detail /- -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 bloc-foot">
                        <aside class="widget widget-links">
                            <h3 class="widget-title">Liens</h3>
                            <ul>
                                <li><a href="#" title="Médecins">Les médecins</a></li>
                                <li><a href="#" title="Examens">Les examens</a></li>
                                <li><a href="#" title="FAQ">F.A.Q</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 bloc-foot">
                        <aside class="widget widget-links">
                            <h3 class="widget-title">Horaires d'ouverture du cabinet</h3>
                            <div class="time-schedule">
                                <p>Lundi au vendredi <span>8h - 18h</span></p>
                                <p>Samedi <span>8h - 13h</span></p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div><!-- Container /- -->
            <!-- Bottom Footer -->
            <div class="container-fluid  bottom-footer">
                <p>&copy; 2018 <a href="https://www.arp-code.fr">Warp-Code</a> Tous droits réservés.</p>
            </div><!-- Bottom Footer /- -->
        </footer>

    </div><!-- Main Container -->

    <!-- JQuery v1.11.3 -->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- Library - Modernizer -->
    <script src="{{asset('js/modernizr.js')}}"></script>

    <!-- Library - Bootstrap v3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->

    <!-- jQuery Easing v1.3 -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>

    <!-- Library - jQuery.appear -->
    <script src="{{asset('js/jquery.appear.js')}}"></script>

    <!-- Library - OWL Carousel V.2.0 beta -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

    <!-- jQuery For Number Counter -->
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>

    <!-- Library - Isotope Portfolio Filter -->
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>

    <!-- Library - Magnific Popup - v1.0.0 -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>


    <!-- Library - Theme JS -->
    <script src="{{asset('js/functions.js')}}"></script>
</body>

</html>
