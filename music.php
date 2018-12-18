<?
$dbc = mysqli_connect('localhost', 'root', '', 'Test_BD');
include('functions.php');
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
    <title>Mus80 - Музыка</title>

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


                        <!-- Single Upcoming Shows -->
                 <!--        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>25 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s3.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Sunflower festival</h6>
                                    <p>Paris, France</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>Sunflower Arena</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div> -->

                        <!-- Single Upcoming Shows -->
                       <!--  <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>30 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/bg-img/s4.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>At the Castle</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Buy Tikets</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ##### Upcoming Shows Area End ##### -->

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

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" 
                        style="background-image: url(img/bg-img/abyss.jpg);">
                        </div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">
                            
                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h4>Into The Abyss</h4>
                                </div>
                                <div class="album-buy-now">
                                </div>
                            </div>
                            <div class="album-all-songs">
                                <!-- Music Playlist -->     
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>The Descent(Intro)</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/into/The Descent(Intro).mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Battle</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/into/Battle.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Moon Runner</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/into/Moon Runner.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Mask</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/into/Mask.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Odyssey</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/into/Odyssey.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Suede</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/into/Suede.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>No Survivors</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/into/No Survivors.mp3">
                                        </audio>
                                    </div>
                                </div>
                            </div>


                            <!-- Now Playing -->
                             <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                                <div class="songs-name">
                                    <p>Into The Abyss</p>
                                    
                                        <a href = "audio/into/Into The Abyss.rar" download >Скачать альбом</a>
                                    

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/ep2.png);"></div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">
                            
                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h4>EP II</h4>
                                </div>
                                <div class="album-buy-now">
                                </div>
                            </div>
                            <div class="album-all-songs">
                                <!-- Music Playlist -->     
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Roller Mobster</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep2/Roller Mobster.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Meet Matt Stryker</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep2/Meet Matt Stryker.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Obituary</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep2/Obituary.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Looking For Tracy Tzu</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep2/Looking For Tracy Tzu.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Sexkiller On The Loose</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep2/Sexkiller On The Loose.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Hang'em All</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep2/Hang'em All.mp3">
                                        </audio>
                                    </div>
                                </div>
                            </div>


                            <!-- Now Playing -->
                             <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                                <div class="songs-name">
                                    <p>EP II</p>
                                    
                                        <a href = "audio/ep2/EP2.rar" download >Скачать альбом</a>
                                    

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/ep3.jpg);"></div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">
                            
                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h4>EP III</h4>
                                </div>
                                <div class="album-buy-now">
                                </div>
                            </div>
                            <div class="album-all-songs">
                                <!-- Music Playlist -->     
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Division Ruine</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep3/Division Ruine.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Paradise Warfare</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep3/Paradise Warfare.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Run, Sally, Run!</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep3/Run, Sally, Run!.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Turbo Killer</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep3/Turbo Killer.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Anarchy Road</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep3/Anarchy Road.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Invasion A.D</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/ep3/Invasion A.D.mp3">
                                        </audio>
                                    </div>
                                </div>
                            </div>


                            <!-- Now Playing -->
                             <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                                <div class="songs-name">
                                    <p>EP III</p>
                                    
                                        <a href = "audio/ep3/EP3.rar" download >Скачать альбом</a>
                                    

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/valley.jpg);"></div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">
                            
                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h4>The Uncanny Valley</h4>
                                </div>
                                <div class="album-buy-now">
                                </div>
                            </div>
                            <div class="album-all-songs">
                                <!-- Music Playlist -->     
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Neo Tokyo</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/uncanny/Neo Tokyo.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Weapons For Children</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/uncanny/Weapons For Children.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Death Squad</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/uncanny/Death Squad.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Venger (feat.Greta Link)</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/uncanny/Venger (feat.Greta Link).mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Disco Inferno</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/uncanny/Disco Inferno.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>Diabolus Ex Machina</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/uncanny/Diabolus Ex Machina.mp3">
                                        </audio>
                                    </div>
                                <!-- Single Song -->
                                    <div class="single-music">
                                        <h6>The Cult Of 2112</h6>
                                        <audio preload="auto" controls>
                                            <source src="audio/uncanny/The Cult Of 2112.mp3">
                                        </audio>
                                    </div>
                                </div>
                            </div>


                            <!-- Now Playing -->
                             <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                                <div class="songs-name">
                                    <p>The Uncanny Valley</p>
                                    
                                        <a href = "audio/uncanny/The Uncanny Valley.rar" download >Скачать альбом</a>
                                    

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->

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