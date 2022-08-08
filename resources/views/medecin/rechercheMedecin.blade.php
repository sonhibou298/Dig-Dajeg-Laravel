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

<section class="card-medecin">
    <div class="container">
        <div class="row mb-3 mt-5">
            @foreach($medecins as $medecin)
                <div class="col-md-12 col-lg-12 col-sm-12 mt-2">
                    <div class="d-flex flex-row border rounded">
                        <div class="p-0 w-25">

                        </div>
                        <div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
                            <h4 class="text">Dr. {{$medecin->User->prenom}}  {{$medecin->User->nom}}</h4>
                            <h5 class="text-service">{{$medecin->Service->nomService}}</h5>
                            <h6>{{$medecin->JourDeService->jourDisponible}}</h6>
                            <h6>{{$medecin->JourDeService->heureDebut}}</h6>
                            <h6>{{$medecin->JourDeService->heureDecente}}</h6>
                            <a href={{route('search')}}><button class="btn-rv">Prendre un rendez-vous</button></a>
                            {{--                        <p class="text-right m-0"><a href="#" class="btn btn-success"> View Profile</a></p>--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
</body>
<script src="./TemplateHome/js/jquery.js"></script>
<script src="./TemplateHome/js/bootstrap.min.js"></script>
<script src="./TemplateHome/js/jquery.sticky.js"></script>
<script src="./TemplateHome/js/jquery.stellar.min.js"></script>
<script src="./TemplateHome/js/wow.min.js"></script>
<script src="./TemplateHome/js/smoothscroll.js"></script>
<script src="./TemplateHome/js/owl.carousel.min.js"></script>
<script src="./TemplateHome/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
