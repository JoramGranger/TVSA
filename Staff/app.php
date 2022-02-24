<?php 
session_start();
if($_SESSION['id'] == '' && $_SESSION['type'] != 'STAFF')
{
    $_SESSION['message'] = "Please Login First";
    header("location: ../error.php");    
}
include('../Inc/DBC.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1 minimum-scale1">
    <title>Staff | TVSA</title>
    <link rel="stylesheet" href="../Assets/fontawesome-free-5.15.4-web/css/all.css">
    <!-- <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/custom.css"> -->
    <link rel="stylesheet" href="../Assets/materialize-css/dist/css/materialize.css">
    <link rel="stylesheet" href="../Assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="../Assets/materialize-css/dist/css/fes1.css">
    <link rel="stylesheet" href="../Assets/DataTables/DataTables-1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../Assets/DataTables/DataTables-1.11.3/css/dataTables.dataTables.css">
    
</head>
<body>
    <input type="checkbox" name="" id="sidebar-toggle">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <div class="brand-icons">
                    <span><i class="fa fa-bell"></i></span>
                </div>
            </div>    
        </div>
        <div class="sidebar-main">
            <div class="sidebar-user">
                <span class="user-name">
                    <?php 
                        if(isset($_SESSION['user']))
                        {
                            if($_SESSION['type'] != 'STAFF')
                            {
                                $_SESSION['message'] = "Please Login First";
                                header("location: ../error.php");
                            }
                            else
                            {
                                echo $_SESSION['user'];
                            }
                            
                        }
                        else
                        {
                            $_SESSION['message'] = "Please Login First";
                            header("location: ../error.php");
                        }
                    ?>
                </span>
                <span class="user-class">
                    <?php 
                        /* if(isset($_SESSION['class']))
                        {
                            echo $_SESSION['class'];
                        } */
                    ?>
                </span>
            </div>
            <div class="sidebar-menu">
                <div class="menu-head">
                    <span>Dashboard</span>
                </div>
                <form action="" method="POST">
                    <button name="home" class="active"><span><i class="blue-text fa fa-home"></i></span>Home</button>
                    <button name="programs"><span><i class="blue-text fa fa-square"></i></span>Pograms</button>
                    <button name="settings"><span><i class="blue-text fa fa-wrench"></i></span>Settings</button>
                    <button name="logout"><span><i class="blue-text fa fa-sign-out-alt"></i></span>Logout</button>
                </form>                
            </div>
        </div>
    </div>
    <!-- SIDEBAR -->
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <header class="header-other">
            <div class="menu-toggle">
                <label for="sidebar-toggle"><span><i class="fa fa-bars"></i></span></label>
            </div>
            <div class="site-title">
                <span class="hide-on-small-and-down">TeleVision Scheduling Application <i class="fa fa-desktop"></i></span>
                <span class="hide-on-med-and-up">TVSA <i class="fa fa-desktop"></i></span>
            </div>
        </header>
        <main>
            <div class="page-header">
                <div class="alerting-container">
                    <span id="alerting">
                        <?php 
                        if(isset($_SESSION['message']) && $_SESSION['message'] != '')
                        {
                            echo($_SESSION['message']);
                            unset($_SESSION['message']);
                        }
                        
                        ?>
                    </span>
                </div>
            </div>
            <div class="section">
                <?php
                if(isset($_POST['home']))
                {
                    include('programs.php');
                }
                /*programs script */
                if(isset($_POST['programs']))
                {
                    include('programs.php');
                }
                if(isset($_POST['schedule-program']))
                {
                    include('new-program.php');
                }
                if(isset($_POST['back-program']))
                {
                    include('programs.php');
                }
                if(isset($_POST['submit-schedule']))
                {
                    include('submit-schedule.php');
                }
                /* settings script */
                if(isset($_POST['settings']))
                {
                    include('settings.php');
                }
                if(isset($_POST['change-password']))
                {
                    include('change-password.php');
                }
                if(isset($_POST['apply-settings']))
                {
                    include('apply-settings.php');
                }
                /* logout script */
                if(isset($_POST['logout']))
                {
                    include('../Inc/logout.php');
                }
                ?>
            </div>
        </main>
    </div>
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