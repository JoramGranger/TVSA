<?php
include('Inc/DBC.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1 minimum-scale1">
    <title>home | TVSA</title>
    <link rel="stylesheet" href="../Assets/fontawesome-free-5.15.4-web/css/all.css">
    <!-- <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/custom.css"> -->
    <link rel="stylesheet" href="../Assets/materialize-css/dist/css/materialize.css">
    <link rel="stylesheet" href="../Assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="../Assets/materialize-css/dist/css/fes1.css">
</head>
<body>
<header class="header">
        <nav class="nav-wrapper blue">
            <div class="container">
                <h5 class="white-text right">TVSA <i class="fa fa-desktop"></i></h5>
            </div>
        </nav>
        <div class="section row">
            <div class="col s12 m1 l1 hide-on-small-and-down"></div>
            <div class="col s12 m10 l10 white z-depth-3 login-container">
                <?php                
                    include('programs.php'); 
                        /* logout script */               
                ?> 
                <a href="signin.php" class="blue btn center">LOGIN</a>
                <br><br>                             
            </div>
            <div class="col s12 m1 l1 hide-on-small-and-down"></div>
        </div>
    </header>
    <!-- MAIN CONTENT -->
    <script src="../Assets/fontawesome-free-5.15.4-web/js/all.js"></script>
    <script src="../Assets/jquery/dist/jquery.js"></script>    
    <script src="../Assets/materialize-css/dist/js/materialize.js"></script> 
    <script src="../Assets/DataTables/DataTables-1.11.3/js/dataTables.dataTables.js"></script> 
    <script src="../Assets/DataTables/DataTables-1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function(){
            $('select').formSelect();
            /*$('.sidenav').sidenav();*/
            $('#programs-table').DataTable();
            $('.tabs').tabs();
        });
    </script> 
</body>
</html>