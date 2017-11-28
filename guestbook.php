<!DOCTYPE html>
<html>

<?php
    require 'header.php';
    
?>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Love2Sing</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Over ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Fotoalbum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="guestbook.php">Gastenboek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>Gastenboek</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">Welkom bij ons gastenboek! Laat een bericht achter of bekijk eerder geschreven berichten.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="viewGuestbook.php">Bekijk gastenboek</a>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="addtoGuestbook.php?gb=true">Schrijf in gastenboek</a>
                </div>
            </div>
        </div>
    </header>

    <body>
    </body>
    <?php
    require 'footer.php';
    ?>

</html>
