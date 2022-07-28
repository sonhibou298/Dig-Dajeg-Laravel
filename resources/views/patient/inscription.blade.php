<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Page d'inscription</title>

    <!-- Icons font CSS-->
    <link href="./TemplateInscription/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="./TemplateInscription/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="./TemplateInscription/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./TemplateInscription/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

   <!-- Bootstrap-->
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
    <!-- Main CSS-->
    <link href="./TemplateInscription/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Inscription</h2>
                <form method="POST" action={{route('addUser')}}>
                    @csrf
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Nom</label>
                                <input class="input--style-4" type="text" name="nom">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Prenom</label>
                                <input class="input--style-4" type="text" name="prenom">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Date Naissance</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="date" name="dateNaissance">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Genre</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Homme
                                        <input type="radio" checked="checked" name="genre" value="Homme">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Femme
                                        <input type="radio" name="genre" value="Femme">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Telephone</label>
                                <input class="input--style-4" type="string" name="telephone">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Adresse</label>
                                <input class="input--style-4" type="text" name="adresse">
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Mot de passe</label>
                                <input class="input--style-4" type="password" name="password">
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Profil</label>
                                <input class="input--style-4" type="file" name="profil">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Role</label>
                                <select class="input-group" aria-label="Default select example" name="role_id">
                                    <option selected hidden>Open this select menu</option>
                                    <option value="3">Patient</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="./TemplateInscription/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="./TemplateInscription/vendor/select2/select2.min.js"></script>
<script src="./TemplateInscription/vendor/datepicker/moment.min.js"></script>
<script src="./TemplateInscription/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
