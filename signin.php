<?php
include('login.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVSA</title>
    <link rel="stylesheet" type="text/css" href="Assets/@fortawesome/fontawesome-free/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="Assets/materialize-css/dist/css/materialize.min.css"/>
    <link rel="stylesheet" type="text/css" href="Assets/materialize-css/dist/css/custom.css"/>
</head>
<body>
    <header class="header">
        <nav class="nav-wrapper blue">
            <div class="container">
                <h5 class="white-text right">TVSA</h5>
            </div>
        </nav>
        <div class="section container row">
            <div class="col s12 m2 l3 hide-on-small-and-down"></div>
            <div class="col s12 m8 l6 white z-depth-3 login-container">
                <p id="alert"></p>
                <div class="section container" id="login">
                    <form action="" name="loginform" class="container" method="POST" autocomplete="off" onsubmit="return validator()"> <!-- onsubmit="return validator()" -->
                        <span class="center">
                            <i class="center fas fa-user"></i>
                        </span>
                        <div class="input-field">
                            <input name="name" type="text" id="name">
                            <label for="name">USERNAME</label>
                        </div>
                        <div class="input-field">
                            <input name="password" type="password" id="login-password">
                            <label for="password">PASSWORD</label>
                        </div>
                        <div class="input-field center">
                            <button name="login" class="btn-large center blue waves-effect">Login</button>
                        </div>
                    </form>
                </div>               
                </div>             
            </div>
            <div class="col s12 m2 l3 hide-on-small-and-down"></div>
        </div>
    </header>
    
    <script type="text/javascript" src="Assets/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="Assets/materialize-css/dist/js/materialize.min.js"></script>
    <script type="text/javascript" src="Assets/@fortawesome/js/brands.js"></script>
    <script type="text/javascript" src="Assets/@fortawesome/js/solid.js"></script>
    <script type="text/javascript" src="Assets/@fortawesome/js/fontawesome.js"></script>
    <script type="text/javascript" src="Assets/Js/login.js"></script>
    <script>
        $(document).ready(function(){
            $('select').formSelect();
            $('.tabs').tabs();
        });
    </script>
</body>
</html>