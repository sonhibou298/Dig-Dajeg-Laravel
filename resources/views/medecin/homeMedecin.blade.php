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
                    <a class="nav-link" href="#">Mon compte</a>
                </li>
                <li class="nav-item">
                    <a class="appointment-btn" href="#">Deconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="homeMedecin">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 shadow">
                        <div class="card-body">
                                <div class="col">
                                    <p class="h2 font-weight-bold mb-0 text-align-center">{{$rv}}</p>
                                </div>
                            <p class="mt-3 mb-0 text-muted text-sm text-align-center">
                                <span class="text-nowrap">Total Rendez-vous</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-12">
                    <div class="card card-stats mb-4 mb-xl-0 shadow">
                        <div class="card-body">
                            <div class="row">
                                    <p class="h2 font-weight-bold mb-0 text-align-center">{{$rva}}</p>
                                </div>

                            <p class="mt-3 mb-0 text-muted text-sm text-align-center">
                                <span class="text-nowrap">Rendez-vous approuvés</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 shadow">
                        <div class="card-body">
                                <div class="col">
                                    <p class="h2 font-weight-bold mb-0 text-align-center">{{$rve}}</p>
                                </div>
                            <p class="mt-3 mb-0 text-muted text-sm text-align-center">
                                <span class="text-nowrap">Rendez-vous en attente</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 shadow">
                        <div class="card-body">
                                <div class="col">
                                    <p class="h2 font-weight-bold mb-0 text-align-center">{{$rvr}}</p>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm text-align-center">
                                <span class="text-nowrap">Rendez-vous annulés</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<section class="table-rv">
    <table class="table table-bordered">
        <thead>
        <tr class="text">
            <th scope="col">#</th>
            <th scope="col">Prenom & Nom</th>
            <th scope="col">Date réservation</th>
            <th scope="col">Date Rv</th>
            <th scope="col">Heure Rv</th>
            <th scope="col">Motif</th>
            <th scope="col">Tarif</th>
            <th scope="col">Proche</th>
            <th scope="col">Payé</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
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