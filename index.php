<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quiz - Country Flags</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">Quiz - Kezdőoldal</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php#kontinensek">Kontinensek</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">A zászlókról</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Véleménye</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Nemzetek zászlói kvíz</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Country Flags - Nemzetek zászlói</p>
            </div>
        </header>
        <?php
            if(isset($_GET['p'])){
                include $_GET['p'];
            }
            else{
                include 'fooldal.php';
            }
            
        ?>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Érdekességek a zászlókról</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row text-justify">
                    <div class="col-12 col-md text-white"><img src="img/dania_kicsi.png" class="img-fluid pt-3" id="dania_kicsi"><div>Dánia zászlaja a legrégebbi.</div><img src="img/svajc_kicsi.png" class="img-fluid pt-3" id="svajc_kicsi"><div>Svájc zászlaja adta a Nemzetközi Vöröskereszt zászlajának ötletét.</div><img src="img/ecuador_kicsi.png" class="img-fluid pt-3" id="ecuador_kicsi"><div>Vannak országok, amiknek lobogóján különböző állatok láthatók, bár a legnépszerűbb a madár.</div></div>
                    <div class="col-12 col-md-4"><p class="lead">A legelterjedtebb feladata egy zászlónak egy nép vagy ország szimbolizálása. Talán eszünkbe sem jutna, de az országok zászlói számos információt tartalmaznak, amik sokkal összetettebbek és érdekesebbek, mint gondolnánk. Amikor megnézünk egy zászlót, értékeljük a színét, formáját és mintázatát, de nem gondolunk arra, hogy milyen módon készült és miért pont olyan, amilyen.</p></div>
                    <div class="col-12 col-md-4"><p class="lead">Mindannyian tudjuk, hogy a zászló egy rúdra rögzített, meghatározott színezésű és mintájú textil. Általában téglalap alakú, de ettől függetlenül más formák is jelen vannak. Rendeltetése eredetileg katonai volt, célja pedig a csapatok azonosítása és vezetése volt. Jeladásra még napjainkban használnak zászlókat, például a hajózásban vagy a vasúti közlekedésben. Trikolórnak nevezzük a három különböző sávból álló zászlókat. Ilyen például hazánk zászlaja, a francia vagy az olasz nemzeti lobogó is. </p></div>
                    <div class="col-12 col-md erdekessegek"><img src="img/holland_kicsi.png" class="img-fluid pt-3" id="holland_kicsi"><div>Hollandia zászlaja a legrégebbi trikolór.</div><img src="img/azerbaijan_kicsi.png" class="img-fluid pt-3" id="azerbaijan_kicsi"><div>A csillag és a félhold.A csillag és a félhold az iszlám államot képviseli, valamint azok az országok tüntetik fel zászlajukon, ahol ezt a vallást követik.</div><img src="img/Africa/ssudan.png" class="img-fluid pt-3" id="del-sudan_kicsi"><div>Dél-Szudán zászlaja a legújabb a világon.</div></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://europa.eu/kids-corner/memory/more/index_hu.htm" target="_blank">
                        <i class="fas fa-download mr-2"></i>
                        Szeretnél többet megtudni Európa zászlóiról?
                    </a>
                </div>
                <div class="text-right mt-4">
                    <p>Források: https://mocool.eu/10-fantasztikus-teny-a-vilag-zaszloirol-amit-eddig-nem-tudtal/ <br> https://hu.wikipedia.org/wiki/Z%C3%A1szl%C3%B3</p>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Írjon valamit nekünk!</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                <?php
                    $email="";
                    if(isset($_POST['kuldes'])){
                        $email=$_POST['mail'];
                        $body=$_POST['msg'];
                        include 'mailContact.php';
                        echo '<script> alert("Köszönjük a véleményét!");
                                        window.location.href="index.php#contact";
                        </script>';
                        //header('Location: index.php#contact');
                    }
                ?>
            
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form class="form" method="Post">
                            
                                <div class="form-group  controls mb-0 pb-2">
                                    <label>Név</label>
                                    <input class="form-control" name="nev" id="name" type="text" placeholder="Név" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                    
                            
                                <div class="form-group  controls mb-0 pb-2">
                                    <label>Email cím</label>
                                    <input class="form-control" name="mail" id="email" type="email" placeholder="Email cím" required="required"  />
                                    <p class="help-block text-danger"></p>
                                </div>

                            
                                <div class="form-group  controls mb-0 pb-2">
                                    <label>Üzenet</label>
                                    <textarea class="form-control" name="msg" id="message" rows="5" placeholder="Üzenet" required="required" ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                           
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" name="kuldes">Küldés</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Címünk</h4>
                        <p class="lead mb-0">
                            6000 Kecskemét
                            <br />
                            Találdki utca, 123.
                        </p>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Rólunk</h4>
                        <p class="lead mb-0">
                            A kvíz záródolgozatom céljából készült.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2021</small></div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
