
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>webmarketing</title>
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- Global Stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate/animate.min.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body id="page-top">

        <!--====================================================
                                 HEADER
        ======================================================--> 
        <?php
        ?>
        <header>

            <!-- Top Navbar  -->
            <div class="top-menubar">
                <div class="topmenu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <ul class="list-inline top-contacts">
                                    <li>
                                        <i class="fa fa-envelope"></i> Email: <a href="mailto:info@themeborn.com">frankline.tefouet@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i> Frankline TEFOUET: +33 7 86 97 06 89
                                    </li>
                                </ul>
                            </div> 
                            <div class="col-md-5">
                                <ul class="list-inline top-data">
                                    <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                                    <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                                    <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 

                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
                <div class="container">
                    <a class="navbar-brand smooth-scroll" href="index1.php">
                        <img src="img/lm-logo.png" alt="logo"  height="50 px">
                    </a> 
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                        <span class="navbar-toggler-icon"></span>
                    </button>  
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item" ><a class="nav-link smooth-scroll" href="index1.php">Accueil</a></li>
                            <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entreprise</a> 
                                <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="about.html">Qui-sommes-nous?</a>
                                    <a class="dropdown-item" href="team.html">rencontrer notre equipe</a>

                                </div>
                            </li>
                            <li class="nav-item" ><a class="nav-link smooth-scroll" href="services.html"> nos Services</a></li> 
                            <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">contact now</a></li>


                            <li>
                                <i class="search fa fa-search search-btn"></i>
                                <div class="search-open">
                                    <div class="input-group animated fadeInUp">
                                        <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                                        <span class="input-group-addon" id="basic-addon2">Go</span>
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="top-menubar-nav">
                                    <div class="topmenu ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <ul class="list-inline top-contacts">
                                                        <li>
                                                            <i class="fa fa-envelope"></i> Email: <a href="mailto:info@htmlstream.com">frankline.tefouet@gmail.com</a>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-phone"></i> Frankline TEFOUET: +33 7 86 97 06 89
                                                        </li>
                                                    </ul>
                                                </div> 
                                                <div class="col-md-3">
                                                    <ul class="list-inline top-data">
                                                        <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                                                        <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                                                        <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                        </ul>  
                    </div>
                </div>
            </nav>
        </header> 

        <!--====================================================
                            LOGIN OR REGISTER
        ======================================================-->
        <section id="login">
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="fa fa-times" aria-hidden="true"></span>
                            </button>
                            <div id="div-forms">
                                <form id="login-form" action="" method="post">
                                    <h3 class="text-center">formulaire de  contact</h3>
                                    <div class="modal-body">
                                        <label for="username">nom</label> 
                                        <input id="nom" name="nom" class="form-control" name="nom" type="text" placeholder="Enter uname " required>
                                        <label for="username">email</label> 
                                        <input id="" class="form-control" type="text" name="email" placeholder="Enter email" required>
                                        <label for="username">ville</label> 
                                        <input id="phone" class="form-control" type="text" name="ville" placeholder="Enter city" required>
                                        <label for="username">phone</label> 
                                        <input id="" class="form-control" type="text" name="phone" placeholder="Enter phone" required>
                                        <label for="username">Message</label> 
                                        <textarea name="description" rows="5" cols="30">vous pouvez nous ecrire ici..
                                 
                                        </textarea>
                                    </div>
                                    <div class="modal-footer text-center">
                                        <div>
                                            <button type="submit" name="ok"   class="btn btn-general btn-white">enregistrer</button>
                                        </div>

                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>
                 <?php
        include('sotcocogconnexion/connexion.php');
        ?>

        <?php
        if (isset($_POST['ok']))/* //test si une variable existe (expresssion régulière) */ {
            $nom = $_POST["nom"];
            $email = $_POST["email"];
            $ville = $_POST["ville"];
            $phone = $_POST["phone"];
            $message = $_POST["description"];

            $sql = $con->query("INSERT INTO message(nom,email,ville,phone,description,dateu) VALUES('" . $nom . "','" . $email . "','" . $ville . "','" . $phone . "','" . $message . "', NOW())");
            echo"<script language='javascript'>alert('information enregistrer avec succes')</script>";
        }
        ?>
        </section>  
       
<!--        <script type="text/javascript">
            //<![CDATA[

            function valider() {
                // si la valeur du champ prenom est non vide
                alert("Votre message à bien été envoyé");
                window.location.href = "index1.php";
            }

            //]]>
        </script>-->

        <!--====================================================
                                 HOME
        ======================================================-->
        <section id="home">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"> 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active slides">
                        <div class="overlay"></div>
                        <div class="slide-1"></div>
                        <div class="hero ">
                            <hgroup class="wow fadeInUp">
                                <h3>Vous souhaitez donner de la visibilité à votre business ? 
                                    Vous souhaitez convertir vos prospects ?<span ><a href="" class="typewrite" data-period="2000" data-type='[ " Business", " Vous voudriez gagner de nouveaux prospects ?"]'>
                                            <span class="wrap"></span></a></span> </h3>        
                                <h3>Quels que soient vos objectifs, nous mettons en place, ensemble, la stratégie qui vous permet de faire évoluer votre business.</h3>
                            </hgroup>
                        </div>           
                    </div> 
                </div> 
            </div> 
        </section> 


        <section id="story">
            <div class="container">
                <div class="row title-bar">

                </div>
            </div>  
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-md-6" >
                        <div class="story-himg" >
                            <img src="img/image-4.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="story-desc">
                            <h3>COMMENT FAIRE GRANDIR LE MONDE AVEC NOUS</h3>
                            <div class="heading-border-light"></div> 
                            <p>Tout le monde définit le succès différemment - autant qu'il y a des gens, il y a des opinions différentes. Le succès de nos étudiants, anciens élèves et de leurs employeurs est le numéro un de notre liste de priorités. Nous travaillons dur au nom du succès de nos anciens - être parmi les meilleurs et maintenir le taux d'emploi élevé. .

                                Vous pouvez trouver ici quelques réflexions sur le succès de nos étudiants et anciens élèves - chaque histoire est unique, mais c'est ce qu'est le succès. Tout le monde le voit différemment. </p>

                        </div>
                    </div>
                </div>
            </div>  

        </section>

        <!--====================================================
                          COMPANY THOUGHT
        ======================================================-->
        <div class="overlay-thought"></div>
        <section id="thought" class="bg-parallax thought-bg">
            <div class="container">
                <div id="thought-desc" class="row title-bar title-bar-thought owl-carousel owl-theme">
                    <div class="col-md-12 ">
                        <div class="heading-border bg-white"></div>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Webdigital apportera de la valeur a toutes les parties prenantes et atteindra l'excellence et le leaddership grace a une telle fourniture de valeur,nous nous efforcerons d'accompagner les parties prenantes dans toutes activites qui nous concernent.webdigital offres des belles choses .</p>          </div>
                    <div class="col-md-12 thought-desc">
                        <div class="heading-border bg-white"></div>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">assurer la qualite dans webdigital a un processus d'assurance qualite rigoureux.l'assurance qualite est assure par une equipe independabnte d'expert forme pour chaque projet. </p>

                    </div>
                </div>
            </div>         
        </section> 

        <!--====================================================
                           SERVICE-HOME
        ======================================================--> 
        <section id="service-h">
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-md-6" >
                        <div class="service-himg" > 
                            <img src="img/image-4.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-h-desc">
                            <h3>NOUS FOURNISSONS D'EXCELLENTS SERVICES</h3>
                            <p>WebDigital offre une gamme complète de services pour aider les organisations à mieux travailler. De la création de normes d'excellence à la formation de vos employés pour qu'ils travaillent de manière plus efficace.</p>  
                            <div class="service-h-tab"> 
                                <nav class="nav nav-tabs" id="myTab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Audit complet du site</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">campagnes SEO</a> 
                                    <a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">Formation SEO</a> 
                                </nav>
                                <nav class="nav nav-tabs" id="myTab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Création de campagnes Google Adwords</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"> Suivi et optimisation de campagnes</a> 
                                    <a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">Formation Google Ads</a> 
                                </nav>
                                <nav class="nav nav-tabs" id="myTab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Emailing</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"> Réseaux sociaux</a> 
                                    <a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">Sites vitrines</a> 
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>



        <div id="footer-s1" class="footer-s1">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!-- About Us -->
                        <div class="col-md-3 col-sm-6 ">

                            <ul class="list-unstyled comp-desc-f">
                                <li><p> </p></li> 
                            </ul><br> 
                        </div>
                        <!-- End About Us -->

                        <!-- Recent News -->

                        <!-- End Recent list -->

                        <!-- Recent Blog Entries -->

                        <!-- End Recent Blog Entries -->

                        <!-- Latest Tweets -->
                        <div class="col-md-3 col-sm-6">
                            <div class="heading-footer"><h2>contact</h2></div>
                            <address class="address-details-f">
                                25, France <br>
                                paris, US <br>
                                Phone: +33 7 86 97 06 89 <br>
                                <br>
                                Email: <a href="mailto:info@Businessbox.com" class="">frankline.tefouet@gmail.com</a>
                            </address>  
                            <ul class="list-inline social-icon-f top-data">
                                <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                                <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                                <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                            </ul>
                        </div>
                        <!-- End Latest Tweets -->
                    </div>
                </div><!--/container -->
            </div> 
        </div>

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="footer-copyrights">
                            <p>Copyrights &copy; 2017 All Rights Reserved by WebDigital. <a href="#">Privacy Policy</a> <a href="#">Terms of Services</a></p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>

    <!--Global JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/wow/wow.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script> 
    <script src="js/custom.js"></script> 
</body>

</html>
