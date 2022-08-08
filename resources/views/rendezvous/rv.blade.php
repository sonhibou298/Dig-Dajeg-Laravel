<!DOCTYPE html>
<html lang="en">

<head>

    <title>Chifaa Dig-daje</title>
    <!--


-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {{--    <link rel="stylesheet" href="./TemplateHome/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('./TemplateHome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('./TemplateHome/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('./TemplateHome/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('./TemplateHome/css/owl.theme.default.min.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('./TemplateHome/css/tooplate-style.css')}}">

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

<section class="formRv">
    <div class="card">
        <div class="card-header text-align-center">
            Remplissez ce formulaire pour prendre un rendez-vous
        </div>
        <div class="card-body">
            <form method="post" action={{route('addRendezVous')}}>
                @csrf
                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Date Rendez-vous</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dateRv">
                    @if($errors->any())
                        @foreach($errors->get('dateRv') as $error)
                            <div class="input-required">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Heure</label>
                    <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Heure" name="heure">
                    @if($errors->any())
                        @foreach($errors->get('heure') as $error)
                            <div class="input-required">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Motif</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Motif consultation" name="motif">
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Paye</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="paye" name="paye" value="0" disabled>
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Tarif</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tarif" name="tarif" value={{$medecin->Service->Tarif->coutConsultation}} disabled>
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Medecin</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Medecin" name="medecin_id" value={{$medecin->id}}>

                </div>

                <button type="submit" class="btn-submit mt-3">Enregistrer</button>
            </form>
        </div>
    </div>
</section>

</body>
<!-- SCRIPTS -->
<script src="{{asset('./TemplateHome/js/jquery.js')}}"></script>
<script src="{{assert('./TemplateHome/js/bootstrap.min.js')}}"></script>
<script src="{{asset('./TemplateHome/js/jquery.sticky.js')}}"></script>
<script src="{{asset('./TemplateHome/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('./TemplateHome/js/wow.min.js')}}"></script>
<script src="{{asset('./TemplateHome/js/smoothscroll.js')}}"></script>
<script src="{{asset('./TemplateHome/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('./TemplateHome/js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
