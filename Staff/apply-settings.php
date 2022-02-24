<?php
//session_start();
include('../Inc/DBC.php');
$password;
$uid = $_SESSION['id'];
if(isset($_POST['apply-settings']))
{
    GLOBAL $password;
    $password = md5($_POST['password']);
    $query = "UPDATE accounts SET PASSWORD='$password' WHERE UID='$uid'";
    if(!(mysqli_query($Link, $query)))
    {
        $_SESSION['message'] = 'PASSWORD CHANGE FAILED<br>TRY AGAIN LATER';
        header("location: ../error.php");
    }
    else
    {
        $_SESSION['message'] = 'PASSWORD CHANGE SUCCESSFUL !! <br> REMEMBER TO USE NEW PASSWORD ON THE NEXT LOGIN';
        header("location: index.php");
        //echo $_SESSION['message'];
   }

}
?>


