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

{{--    <link rel="stylesheet" href="./TemplateHome/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="./TemplateHome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./TemplateHome/css/animate.css">
    <link rel="stylesheet" href="./TemplateHome/css/owl.carousel.css">
    <link rel="stylesheet" href="./TemplateHome/css/owl.theme.default.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./TemplateHome/css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">



<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-5">
                <p>Bienvenue sur la plateforme Chifaa Dig-daje</p>
            </div>

            <div class="col-md-8 col-sm-7 text-align-right">
                <span class="phone-icon"><i class="fa fa-phone"></i> 33 855 64 28</span>
                <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 08:00 - 22:00 (Lun-Sam)</span>
                <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@chifaa.com</a></span>
            </div>
        </div>
    </div>
</header>

<!-- MENU -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="#" class="navbar-brand"><i class="fa fa-h-square"></i>Dig-daje</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('listMedecins')}}>Rechercher un medecin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mes rendez-vous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">M.favoris</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mon compte</a>
                </li>
                <li class="nav-item">
                    <a class="appointment-btn" href="#">Deconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--Baniere Image--}}
<section class="baniere-image w-full-lg">
    <img class="image" src="./TemplateHome/images/imgrv.jpg"/>
    <div class="trouver">
        <h3>Trouvez un medecin et prenez un rendez-vous</h3>
       <form class="form-search">
           <div class="row">
               <div class="col">
                   <input type="text" class="form-control" placeholder="Recherche par medecin" aria-label="Recherche par medecin">
               </div>
               <div class="col">
                   <input type="text" class="form-control" placeholder="Recherche par spécialité" aria-label="Recherche par spécialité">
               </div>
               <div class="col">
                   <button type="button" class="btn-search">Rechercher</button>
               </div>
           </div>
       </form>
    </div>

</section>
<br>

<section class="services">
    <div class="container-fluid">
        <div>
            <h3> Nos Services</h3>
        </div>
        <div class="row my-3">
            <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card text-center mt-5">
                    <div class="card-block">
                        <h3><i class="fa fa-heartbeat fa-3x"></i></h3>
                        <h4 class="card-title">Cardiologie</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card text-center mt-5">
                    <div class="card-block">
                        <h3><i class="fa fa-heartbeat fa-3x"></i></h3>
                        <h4 class="card-title">Diabetologie</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card text-center mt-5">
                    <div class="card-block">
                        <h3><i class="fa fa-user-md fa-3x"></i></h3>
                        <h4 class="card-title">Généraliste</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card text-center mt-5">
                    <div class="card-block">
                        <h3><i class="fa fa-heartbeat fa-3x"></i></h3>
                        <h4 class="card-title">Pneumologie</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card text-center mt-5">
                    <div class="card-block">
                        <h3><i class="fa fa-heartbeat fa-3x"></i></h3>
                        <h4 class="card-title">Gynécologie</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card text-center mt-5">
                    <div class="card-block">
                        <h3><i class="fa fa fa-ambulance fa-3x"></i></h3>
                        <h4 class="card-title">Transport medicalisé</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="ressenser">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Patient</h5>
                    <p class="card-text">
                        <ul>
                            <li>Acceder aux disponibilités de vos professionnels de santé</li>
                            <li>Prenez un rendez-vous en ligne, 24h/24 , 7j/7</li>
                            <li>Recevez des notifications pour vos rendez-vous</li>
                            <li>Retrouvez l'historique de vos rendez-vous</li>
                            <li>Retrouvez vos préscriptions en ligne</li>
                         </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- SCRIPTS -->
<script src="./TemplateHome/js/jquery.js"></script>
<script src="./TemplateHome/js/bootstrap.min.js"></script>
<script src="./TemplateHome/js/jquery.sticky.js"></script>
<script src="./TemplateHome/js/jquery.stellar.min.js"></script>
<script src="./TemplateHome/js/wow.min.js"></script>
<script src="./TemplateHome/js/smoothscroll.js"></script>
<script src="./TemplateHome/js/owl.carousel.min.js"></script>
<script src="./TemplateHome/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
