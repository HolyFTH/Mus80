
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Mus80 - Регистрация</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
       <!-- ##### Preloader ##### -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div> -->

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
                                            <!-- <p><a href="myprofile.php">Мой профиль</a></p> -->
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

      <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/kos.jpg);" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Регистрация</h2>
                        <h6>Введите необходимые данные</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/regist.jpg" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6">
                    <div class="about-content mb-100">
                        <?php
                        $dbc = mysqli_connect('localhost', 'root', '', 'Test_BD') OR DIE('Ошибка подключения к базе данных');
                        if(isset($_POST['submit'])){
                        $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
                        $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
                        $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
                            if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
                                $query = "SELECT * FROM `users` WHERE username = '$username'";
                                $data = mysqli_query($dbc, $query);
                                    if(mysqli_num_rows($data) == 0) {
                                        $query ="INSERT INTO `users` (username, password) VALUES ('$username', '$password2')";
                                        mysqli_query($dbc,$query);
                                        echo '<p style="color:green">Вы успешно зарегистрировались, можете войти</p>';
                                        mysqli_close($dbc);
                                        // exit();
                                    }
                                    else {
                                        echo '<p style="color:red">Логин уже существует</p>';
                                    }

                                }
                        }
                        ?>
                        <content>
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <h4>            
                            <input type="text" name="username" placeholder="Логин" class = "form-control">
                        </h4>
                        <h4>
                            <input type="password" name="password1" placeholder="Пароль" class = "form-control">
                        </h4>
                        <h4>
                            <input type="password" name="password2" placeholder="Подтверждение пароля" class = "form-control">
                        </h4>
                        <h4>
                            <button type ="submit" name="submit" class = "form-control">Зарегистрироваться</button>
                        </h4>
                        </form>
                        </content>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <!-- <script src="js/jquery/jquery-2.2.4.min.js"></script> -->
    <!-- Popper js -->
    <!-- <script src="js/bootstrap/popper.min.js"></script> -->
    <!-- Bootstrap js -->
    <!-- <script src="js/bootstrap/bootstrap.min.js"></script> -->
    <!-- All Plugins js -->
    <!-- <script src="js/plugins/plugins.js"></script> -->
    <!-- Active js -->
    <!-- <script src="js/active.js"></script> -->
    <!-- Audio js -->
    <!-- <script src="js/audiojs/audio.min.js"></script> -->
</body>
</html>