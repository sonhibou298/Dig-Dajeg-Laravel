<!DOCTYPE html>
<html lang="en">

<head>

    <title>Health-Center</title>
    <!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="./TemplateHome/css/bootstrap.min.css">
    <link rel="stylesheet" href="./TemplateHome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./TemplateHome/css/animate.css">
    <link rel="stylesheet" href="./TemplateHome/css/owl.carousel.css">
    <link rel="stylesheet" href="./TemplateHome/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./TemplateHome/css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-5">
                <p>Bienvenue sur la plateforme Health center</p>
            </div>

            <div class="col-md-8 col-sm-7 text-align-right">
                <span class="phone-icon"><i class="fa fa-phone"></i> 33 855 64 28</span>
                <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 08:00 - 22:00 (Lun-Sam)</span>
                <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@healthcenter.com</a></span>
            </div>
        </div>
    </div>
</header>


<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#top" class="smoothScroll">Acceuil</a></li>
                <li><a href="#about" class="smoothScroll">A Propos</a></li>
                <li><a href="#team" class="smoothScroll">Docteurs</a></li>
                <li><a href="#news" class="smoothScroll">Info</a></li>
                <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                <li class="appointment-btn"><a href={{route('login')}}>Espace Medecin</a></li>
                <li class="appointment-btn"><a href={{route('login')}}>Espace Patient</a></li>
            </ul>
        </div>
    </div>
</section>


<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="owl-carousel owl-theme">
                <div class="item item-first">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Rendons votre vie plus heureuse</h3>
                            <h1>Un mode de vie sain</h1>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">Rendez-Vous avec votre Docteur</a>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>La vie change avec Health Center</h3>
                            <h1>Nouveau Style de vie</h1>
                            <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">A Propos de nous</a>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Le pouvoir d'agir ensemble</h3>
                            <h1>Vos avantages pour santé</h1>
                            <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Contactez nous</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">Bienvenue sur <i class="fa fa-h-square"></i>ealth Center</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <p>Digitalisez les dossiers médicaux. Gérez vos patients, votre activité et vos rendez-vous. Gagnez en productivité en optimisant les taches médico-administratives. Personnalisable selon la spécialité ou le besoin. Facile d’accès
                            et stockage sécurisé.</p>
                        <p>Créer un écosystème de soins interconnecté. Projet sur mesure adapté à vos besoins. Cas clients : cabinets médicaux, centres de soins, unités, cliniques, hôpitaux</p>
                    </div>
                    <figure class="profile wow fadeInUp" data-wow-delay="1s">
                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                        <figcaption>
                            <h3>Dr. Serigne Sonhibou Sene</h3>
                            <p>Cardiologue</p>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Nos Docteurs</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <img src="../../public/TemplateHome/images/dentiste.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>Dr Moussa Ndong</h3>
                        <p>Dentiste</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i>77 890 32 23</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">mndong@gmail.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li>
                                <a href="#" class="fa fa-linkedin-square"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-envelope-o"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <img src="../../public/TemplateHome/images/chef.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>Dr Amadou Sy</h3>
                        <p>Pediatre</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 77 245 35 77</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">aichandiaye@company.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li>
                                <a href="#" class="fa fa-facebook-square"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-envelope-o"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-flickr"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <img src="../../public/TemplateHome/images/team-image3.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>Miasha Nakahara</h3>
                        <p>Cardiologue</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-040-0140</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">nakara@company.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li>
                                <a href="#" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-envelope-o"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- NEWS -->
<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Nouvelles Information</h2>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <a href="news-detail.html">
                        <img src="../../public/TemplateHome/images/news-image1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>17 Octobre 2021</span>
                        <h3><a href="news-detail.html">À propos de la technologie étonnante</a></h3>
                        <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Khadidiatou Thimbo</h5>
                                <p>Secretaire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <a href="news-detail.html">
                        <img src="../../public/TemplateHome/images/news-image2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>29 Juin 2020</span>
                        <h3><a href="news-detail.html">Présentation d'un nouveau processus de guérison</a></h3>
                        <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Khadidiatou Thimbo</h5>
                                <p>Secretaire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                    <a href="news-detail.html">
                        <img src="images/news-image3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>22 Janvier 2021</span>
                        <h3><a href="news-detail.html">Examiner la recherche médicale annuelle</a></h3>
                        <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                        <div class="author">
                            <img src="../../public/TemplateHome/images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Khadidiatou Thimbo</h5>
                                <p>Secretaire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="../../public/TemplateHome/images/rv3.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="#">

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Prendre un Rendez-Vous</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="name">Prenom</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre Prenom">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="date">Date</label>
                            <input type="date" name="date" value="" class="form-control">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="select">Choisissez le departement</label>
                            <select class="form-control">
                                <option>Santé en générale</option>
                                <option>Cardiologie</option>
                                <option>Dentaire</option>
                                <option>Pédiatrie</option>
                            </select>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <label for="telephone">Téléphone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Votre téléphone">
                            <label for="Message">Votre Message</label>
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- FOOTER -->
<footer data-stellar-background-ratio="5">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Info Contact</h4>
                    <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                    <div class="contact-info">
                        <p><i class="fa fa-phone"></i> 010-070-0170</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">info@healthcenter.com</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                    <div class="latest-stories">
                        <div class="stories-image">
                            <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="stories-info">
                            <a href="#">
                                <h5>Amazing Technology</h5>
                            </a>
                            <span>March 08, 2018</span>
                        </div>
                    </div>

                    <div class="latest-stories">
                        <div class="stories-image">
                            <a href="#"><img src="../../public/TemplateHome/images/news-image.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="stories-info">
                            <a href="#">
                                <h5>New Healing Process</h5>
                            </a>
                            <span>February 20, 2018</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="opening-hours">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Heures d'ouverture</h4>
                        <p>Lundi - Vendredi <span>08:00 - 22:00 </span></p>
                        <p>Samedi <span>09:00 - 17:00 </span></p>
                        <p>Dimanche <span>Fermé</span></p>
                    </div>

                    <ul class="social-icon">
                        <li>
                            <a href="#" class="fa fa-facebook-square" attr="facebook icon"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 border-top">
                <div class="col-md-4 col-sm-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2021 Your Company | Design: NeezyCraft</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-link">
                        <a href="#">Laboratory Tests</a>
                        <a href="#">Departments</a>
                        <a href="#">Insurance Policy</a>
                        <a href="#">Careers</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 text-align-center">
                    <div class="angle-up-btn">
                        <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="./TemplateHome/js/jquery.js"></script>
<script src="./TemplateHome/js/bootstrap.min.js"></script>
<script src="./TemplateHome/js/jquery.sticky.js"></script>
<script src="./TemplateHome/js/jquery.stellar.min.js"></script>
<script src="./TemplateHome/js/wow.min.js"></script>
<script src="./TemplateHome/js/smoothscroll.js"></script>
<script src="./TemplateHome/js/owl.carousel.min.js"></script>
<script src="./TemplateHome/js/custom.js"></script>

</body>

</html>
