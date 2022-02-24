<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error | TVSA</title>
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="Assets/materialize-css/dist/css/materialize.css">
    <link rel="stylesheet" href="Assets/materialize-css/dist/css/custom.css">
    <link rel="stylesheet" href="Assets/materialize-css/dist/css/fes1.css">
</head>
<body>
    <header class="header">
        <nav class="nav-wrapper blue">
            <div class="container">
        </nav>
        <nav class="nav-wrapper blue">
            <div class="container">
                <a href="#" class="brand-logo"><img src="Images/elite LOGO BUDGE.jpg"></a>
                <h5 class="white-text right hide-on-small-and-down">TVSA</h5>
            </div>
        </nav>
        <div class="section container row">
            <div class="col s12 m2 l3 hide-on-small-and-down"></div>
            <div class="col s12 m8 l6 white z-depth-3 center">
                <div class="failed-container">
                    <span><i class="fa fa-exclamation-triangle"></i></span>
                    <br><br>
                    <p>ERROR!! <br>
                    <?php 
                    session_start();
                    if(isset($_SESSION['message']))
                    {
                        echo $_SESSION['message'];
                    }
                    ?>
                    </p>
                <form action="" method="POST">
                    <button name="home" class="btn blue"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</button>
                    <?php 
                    if(isset($_POST['home']))
                    {
                        header("location:index.php");
                        session_destroy();
                    }
                    ?>
                </form>
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
    <!-- <script src="Assets/fontawesome-free-5.15.4-web/js/all.js"></script>
    <script src="Assets/jquery/dist/jquery.js"></script>    
    <script src="Assets/materialize-css/dist/js/materialize.js"></script>    -->
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
</body>
</html>