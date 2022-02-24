<?php
session_start();
include('Inc/DBC.php');
$username;
$password;
//$_SESSION[''] = ;
$_SESSION['logged'] = '';
$_SESSION['message'] = '';
$_SESSION['user'] = '';
$_SESSION['type'] = '';
if(isset($_POST['login']))
{
    GLOBAL $username;
    $username = $_POST['name'];
    GLOBAL $password;
    $password =  md5($_POST['password']);//  $_POST['password'];
    $accountSearch = mysqli_query($Link, "SELECT *FROM accounts WHERE USERNAME = '$username' && PASSWORD ='$password'") OR die("CONNECTION FAILED");
    // login failure
    if(mysqli_num_rows($accountSearch) == 0)
    {
        $_SESSION['message'] = 'Invalid credentials please';
        header("location: error.php");
    }
    // login success
    else
    {
        $account = mysqli_fetch_array($accountSearch);
        // make logged on
        $_SESSION['logged'] = 1;
        //get user id
        $_SESSION['id'] = $account['UID'];
        //get user email
        $_SESSION['user'] = $account['USERNAME'];
        $_SESSION['activity'] = $account['ACTIVITY'];
        // MAKE ONLINE
        $liveuser = $_SESSION['id'];
        $activityQuery = mysqli_query($Link, "UPDATE accounts SET ACTIVITY = '1' WHERE UID = '$liveuser'") OR die("CONNECTION FAILDE");
        //get user names
        $_SESSION['user'] = $account['USERNAME'];
         //get account type
        $accountType = $account['ACCOUNTTYPE'];
        $_SESSION['type'] = $account['ACCOUNTTYPE'];
        if($accountType == "ADMINISTRATOR")
        {
            header("location: Administrator/index.php");
        }
        else if($accountType == "STAFF")
        {
            header("location: Staff/index.php");
        }
        else
        {
            header("index.php");
        }
    }
}
?>


