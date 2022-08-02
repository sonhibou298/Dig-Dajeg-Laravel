<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page de connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/css/util.css">
    <link rel="stylesheet" type="text/css" href="./TemplateLogin/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <form class="login100-form validate-form flex-sb flex-w" method="post" action={{'login'}}>
                @csrf
                @if(session('message'))
                    <div class="alert-message">
                        {{session('message')}}
                    </div>
                @endif
					<span class="login100-form-title p-b-32">
						Connexion
					</span>

                <span class="txt1 p-b-11">
						Email
					</span>
                <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                    <input class="input100" type="text" name="email" >
                    <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">
						Mot de passe
					</span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                    <input class="input100" type="password" name="password  " >
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-sb-m w-full p-b-48">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Se souvenir de moi
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt3">
                            Mot de passe oublie?
                        </a>
                    </div>
                </div>

                <div class="flex-sb-m w-full p-b-10">
                    <div class="contact100-form-checkbox">
                    </div>

                    <div>
                        <a href={{route('inscription')}} class="txt3">
                          Creer un compte
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Se Connecter
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="./TemplateLogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="./TemplateLogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="./TemplateLogin/vendor/bootstrap/js/popper.js"></script>
<script src="./TemplateLogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="./TemplateLogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="./TemplateLogin/vendor/daterangepicker/moment.min.js"></script>
<script src="./TemplateLogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
