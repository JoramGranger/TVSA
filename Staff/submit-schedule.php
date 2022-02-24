<?php
//session_start();
include('../Inc/DBC.php');
$programName;
$rating;
$presenter;
$starttime;
$starttime;
$day;
$stageName;
$status;
$status = 'PENDING';
$producer;
$creator;
$guests;
$creatorID;
//$_SESSION[''] = ;
$_SESSION['logged'] = '';
$_SESSION['name'] = '';
$_SESSION['message'] = '';
$_SESSION['accounttype'] = '';
if(isset($_POST['submit-schedule']))
{
    GLOBAL $programName;
    $programName = $_POST['pname'];
    GLOBAL $rating;
    $rating = $_POST['rating'];
    GLOBAL $presenter;
    $presenter = $_POST['presenter'];
    GLOBAL $starttime;
    $starttime = $_POST['starttime'];
    GLOBAL $endtime;
    $endtime = $_POST['endtime'];
    GLOBAL $stageName;
    $stageName = $_POST['stagename'];
    GLOBAL $guests;
    $guests = $_POST['guests'];
    GLOBAL $producer;
    $producer = $_POST['producer'];
    GLOBAL $day;
    $day = $_POST['day'];
    GLOBAL $creatorID;
    $creatorID = $_SESSION['id'];
    $accounttype = 'STAFF';
    // user existance check
    $creatorQuery = mysqli_query($Link, "SELECT *FROM accounts WHERE UID = '$creatorID'") OR die("User Existance Check Failed");
    $creatorResult = mysqli_fetch_array($creatorQuery);
    $creator = $creatorResult['USERNAME'];

            // storing
        /*  	PID 	PROGRAMNAME 	PRESENTER 	STAGENAME 	STARTTIME 	ENDTIME 	DAY 	RATING 	CREATOR 	STATUS 	GUESTS 	PRODUCER 		 	
        */
        $addSchedule = "INSERT INTO programs(PROGRAMNAME, PRESENTER, STAGENAME, STARTTIME, ENDTIME, DAY, RATING, CREATOR, STATUS, GUESTS, PRODUCER) 
        VALUES('$programName', '$presenter', '$stageName', '$starttime', '$endtime', '$day', '$rating', '$creator', '$status', '$guests', '$producer')";
        if(!(mysqli_query($Link, $addSchedule)))
        {
            $_SESSION['message'] = "Program Scheduling Failed, Try again later";
            header("location: ../error.php");
        }
        else
        {

            $_SESSION['message'] = "PROGRAM SCHEDULING SUCCESSFUL !!!";
            header("location: index.php");
        }
}
?>


