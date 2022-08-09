@extends('layouts.menuPatient', ['title' => 'Chifaa-Accueil-Patient'])
{{--Baniere Image--}}
@section('content')
<section class="baniere-image w-full-lg">
    <img class="image" src="./TemplateHome/images/imgrv.jpg"/>
    <div class="trouver">
        <h3>Trouvez un medecin et prenez un rendez-vous</h3>
       <form class="form-search" method="get" action={{route('search')}}>
           @csrf
           <div class="row">
               <div class="col">
                   <input type="text" class="form-control" placeholder="Recherche par medecin" aria-label="Recherche par medecin">
               </div>
               <div class="col">
                   <input type="text" class="form-control" name="term" placeholder="Recherche par spécialité" aria-label="Recherche par spécialité">
               </div>
               <div class="col">
                   <button type="submit" class="btn-search">Rechercher</button>
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
                <div class="card-body col-sm-12">
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
@endsection

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
