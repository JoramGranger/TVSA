<?php 
session_start();
if($_SESSION['id'] == '' && $_SESSION['type'] != 'ADMINISTRATOR')
{
    $_SESSION['message'] = "Please Login First";
    header("location: /tvsa/error.php");    
}
include('../Inc/DBC.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1 minimum-scale1">
    <title>Admin | TVSA</title>
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
                            if($_SESSION['type'] != 'ADMINISTRATOR')
                            {
                                $_SESSION['message'] = "Please Login First";
                                header("location: /error.php");
                            }
                            else
                            {
                                echo $_SESSION['user'];
                            }
                            
                        }
                        else
                        {
                            $_SESSION['message'] = "Please Login First";
                            header("location: /error.php");
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
                <form action="app.php" method="POST">
                    <button name="home" class="active"><span><i class="fa fa-home"></i></span>Home</button>
                    <button name="accounts"><span><i class="fa fa-square"></i></span>Users</button>
                    <button name="settings"><span><i class="fa fa-wrench"></i></span>Settings</button>
                    <button name="logout"><span><i class="fa fa-sign-out-alt"></i></span>Logout</button>
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
                <span class="hide-on-small-and-down">TeleVision Scheduling App <i class="fa fa-desktop"></i></span>
                <span class="hide-on-med-and-up">TVSA <i class="fa fa-desktop"></i></span>
            </div>
        </header>
        <main>
            <div class="page-header">
                <div>
                    <h5>
                        <?php 
                        if(isset($_SESSION['message']))
                        {
                            echo($_SESSION['message']);
                        }
                        unset($_SESSION['message']);
                        ?>
                    </h5>
                </div>
            </div>
            <div class="section">
                <?php
                    $backButton = '<form action="app.php" method="POST">
                                        <div class="row">
                                            <div class="input-field col l2">
                                                <button name="back-account" class="btn blue">Back</button>
                                            </div>
                                        </div>
                                    </form>';
                    //session_start();
                    $uid = $_GET['uid'];
                    $_SESSION['update-uid'] = '';
                    $accountView;//echo $temp_class;
                    $accountQuery = mysqli_query($Link, "SELECT *FROM accounts WHERE UID = '$uid'") OR die("CONNECTION FAILED");
                    while($accountResult = mysqli_fetch_assoc($accountQuery))
                    {
                            /* UID	USERNAME	PASSWORD	ACTIVITY	POSITION	GENDER	ACCOUNTTYPE  */
                        $accountID = $accountResult['UID'];
                        $_SESSION['update-uid'] = $accountID;
                        $accountName = $accountResult['USERNAME'];
                        $accountPosition = $accountResult['POSITION'];
                        $accountGender = $accountResult['GENDER'];
                        $accountType = $accountResult['ACCOUNTTYPE'];                    
                        GLOBAL $accountView;
                        $accountView .= $backButton;
                        $accountView .='<form action="index.php" name="editaccountform" class="container" method="POST" enctype="multipart/form-data" autocomplete="off" onsubmit="return validator()">'
                        . '<h5 class="center blue-text">EDIT STAFF DETAILS</h5>'
                        . '<div class="row section">'
                        . '<div class="col l6">'

                        . '<div class="input-field">'
                        . '<input name="username" value="' . $accountName . '" type="text" id="username">'
                        . '<label for="username">USERNAME</label>'
                        . '</div>'

                        . '<div class="input-field">'
                        . '<select name="position">'
                        . '<option value="' . $accountPosition . '">' . $accountPosition . '</option>'
                        . '<option value="PRESENTER">PRESENTER</option>'
                        . '<option value="PRODUCER">PRODUCER</option>'
                        . '<option value="MANAGER">MANAGER</option>'
                        . '</select>'
                        . '<label>Choose Account Type</label>'
                        . '</div>'

                        . '<div class="input-field">'
                        . '<select name="gender" id="gender">'
                        . '<option value="' . $accountGender . '">' . $accountGender . '</option>'
                        . '<option value="FEMALE">FEMALE</option>'
                        . '<option value="MALE">MALE</option>'
                        . '</select>'
                        . '<label for="gender">GENDER</label>'
                        . '</div>' 
                        
                        /* .  '<div class="input-field">'
                        .  '<select name="gender">'
                        .  '<option value="FEMALE">Female</option>'
                        .  '<option value="MALE">MALE</option>'
                        .  '</select>'
                        .  '<label>Gender</label>'
                        .  '</div>' */

                        . '<div class="input-field center">'
                        . '<button name="update-account" class="blue btn"><i class="fa fa-upload"></i>UPDATE</button>'
                        . '</div>'
                        
                        . '</div>'
                        . '</div>'

                        
                        
                        . '</form>';                        
                        }
                        GLOBAL $accountView;
                        echo $accountView;
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
            /*$('select').formSelect();
            $('.sidenav').sidenav();*/
            $('select').formSelect();
            $('#accounts-table').DataTable();
            $('.tabs').tabs();
        });
    </script> 
</body>
</html>