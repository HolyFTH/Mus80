<?
$dbc = mysqli_connect('localhost', 'root', '', 'Test_BD');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Mus80</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.jpg" alt=""></a>

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
                                <section>
                                        <?php
                                            if(empty($_COOKIE['username'])) {
                                        ?>
                                        <ul>
                                            <li><a href="index.php">Главная</a></li>
                                            <li><a href="about-us.php">О нас</a></li>
                                            <li><a href="contact.php">Контакты</a></li>
                                        </ul>
                                        <?php
                                        }
                                        else {
                                            ?>
                                            <ul>
                                                <li><a href="index.php">Главная</a></li>
                                                <li><a href="about-us.php">О нас</a></li>
                                                <li><a href="contact.php">Контакты</a></li>
                                                <li><a href="music.php">Музыка</a></li>
                                            </ul>
                                        <?php
                                        }
                                        ?>
                                </section>

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <section>
                                        <?php
                                            if(empty($_COOKIE['username'])) {
                                        ?>
                                            <a href="auth.php">Вход</a>
                                        <?php
                                        }
                                        else {
                                            ?>
                                            <p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p>
                                        <?php   
                                        }
                                        ?>
                                    </section>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-01.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Mus80<span>Mus80</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Music Theme</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Mus80</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-02.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Mus80<span>Mus80</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Music Template</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Mus80</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-03.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Mus80<span>Mus80</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Free Themes</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Mus80</h2>
            </div>

        </div>
        <!-- bg gradients -->
        <div class="bg-gradients"></div>

        <!-- Slide Down -->
        <div class="slide-down" id="scrollDown">
            <h6>Slide Down</h6>
            <div class="line"></div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/kos.jpg);" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Здравствуйте!</h2>
                        <h6>Немного об этом сайте.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/kos.jpg" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6">
                    <div class="about-content mb-100">
                        <h4></h4>
                        <p>На этом сайте у вас есть возможность прослушивания и скачивания музыки, для этого, чтобы начать это делать - необходимо зарегистрироваться или авторизоваться.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Music Player Area Start ##### -->
    <div class="music-player-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="music-player-slides owl-carousel">

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/cp-brut ep2.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Carpenter Brut</h5>
                                    <p>Obituary</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/carpenter_brut_-_obituary.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/cp-brut ep3.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Carpenter Brut</h5>
                                    <p>Invasion A.D</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/carpenter_brut_-_invasion_a.d..mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/dance wtd abyss.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Dance With The Dead</h5>
                                    <p>Mask</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/dance-with-the-dead-mask.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="img/bg-img/pert.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Perturbator</h5>
                                    <p>The cult of 2112</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="audio/perturbator-the-cult-of-2112.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Music Player Area End ##### -->

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/shape.jpg);"></div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h6>Featured album</h6>
                                    <h4>The Shape</h4>
                                </div>
                                <div class="album-buy-now">
                                </div>
                            </div>

                            <div class="album-all-songs">

                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music active">
                                        <h6>There's a Storm Coming</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/1.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Eyes of Madness</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/2.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Her Ghost</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/3.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Screams and Whispers</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/4.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Adrift</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/5.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Riot</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/6.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Horizon</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/7.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Diabolic</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/8.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Watching You</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/9.mp3">
                                        </audio>
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Quietly into the Night</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/shp/10.mp3">
                                        </audio>
                                    </div>
                                </div>
                            </div>

                            <!-- Now Playing -->
                             <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                                <div class="songs-name">
                                    <p>The Shape</p>
                                    
                                        <a href = "audio/shp/The Shape.rar" download >Скачать альбом</a>
                                    

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->
    <div class="musica-music-artists-area d-flex flex-wrap clearfix">
        <!-- Music Search -->
        <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <h2>Music</h2>
                <h4>Search for the best music</h4>
            </div>
        </div>

        <!-- Artists Search -->
        <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/bg-1.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <h2>Artists</h2>
                <h4>Search for the best artists</h4>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <a href="#"><img src="img/core-img/logo.jpg" alt=""></a>
                        <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>About</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Links</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Snapchat</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Subscribe</h4>
                        </div>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Audio js -->
    <script src="js/audiojs/audio.min.js"></script>
</body>

</html>