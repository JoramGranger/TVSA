<?php 
$liveID = $_SESSION['id'];
$activityQuery = mysqli_query($Link, "UPDATE accounts SET ACTIVITY = '0' WHERE UID = '$liveID'") OR die("CONNECTION FAILED");
header("location: ../index.php");
session_destroy();

?>