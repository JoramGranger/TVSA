<?php
$id = $_SESSION['update-uid'];
$username;
$position;
$gender;
if(isset($_POST['update-account']))
{
    // username
    GLOBAL $username;
    $username = $_POST['username'];
    // landlord
    GLOBAL $position;
    $position = $_POST['position'];
    // price
    GLOBAL $gender;
    $gender = $_POST['gender'];
    
    // update data
        $addAccount = "UPDATE accounts  SET USERNAME='$username', POSITION='$position', GENDER='$gender' WHERE UID='$id'";
    
    if(!(mysqli_query($Link, $addAccount)))
    {
        $_SESSION['message'] = 'ACCOUNT UPDATE FAILED !!<br>TRY AGAIN LATER';
        //header("location: error.php");
    }
    else
    {
        $_SESSION['message'] = 'ACCOUNT, ID: &nbsp;' . $id . 'UPDATE SUCCESSFUL !!';
        //header("location: index.php");
        //echo $_SESSION['message'];
   }
}
?>