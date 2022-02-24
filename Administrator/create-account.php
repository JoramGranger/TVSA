<?php
//session_start();
include('../Inc/DBC.php');
$username;
$password;
$gender;
$position;
$accounttype;
//$_SESSION[''] = ;
$_SESSION['logged'] = '';
$_SESSION['name'] = '';
$_SESSION['message'] = '';
$_SESSION['accounttype'] = '';
if(isset($_POST['createaccount-admin']))
{
    GLOBAL $username;
    $username = $_POST['username'];
    GLOBAL $password;
    $password = md5($_POST['password']);
    GLOBAL $gender;
    $gender = $_POST['gender']; 
    GLOBAL $position;
    $position = $_POST['position']; 
    GLOBAL $accounttype;
    $accounttype = 'STAFF';
    // user existance check
    $usernameQuery = mysqli_query($Link, "SELECT *FROM accounts WHERE USERNAME = '$username'") OR die("User Existance Check Failed");

    $count = mysqli_num_rows($usernameQuery);
    if($count > 0)
    {
        $_SESSION['message'] = 'User Name already registered <br> Choose Another Username';
        header("location: index.php");
    }
    else
    {
            // storing
        /* UID	USERNAME	PASSWORD	ACTIVITY	POSITION	GENDER	ACCOUNTTYPE 	 	
        */
        $AddUser = "INSERT INTO accounts(USERNAME, PASSWORD, ACTIVITY, POSITION, GENDER, ACCOUNTTYPE) 
        VALUES('$username', '$password', '0', '$position', '$gender', '$accounttype')";
        if(!(mysqli_query($Link, $AddUser)))
        {
            $_SESSION['message'] = "Account Creation Failed, Try again later";
            header("location: ../error.php");
        }
        else
        {

            $_SESSION['message'] = "NEW USER ACCOUNT CREATED SUCCESSFULLY !!!";
            header("location: index.php");
        }
    }
}
?>


