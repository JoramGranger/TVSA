<?php
include('../Inc/DBC.php');
$uid = $_GET['uid'];
$delete = "DELETE from accounts WHERE UID = '$uid'";
if(!(mysqli_query($Link, $delete)))
{
    $_SESSION['message'] = 'USER RECORD DELETED FAILED!!';    
}
else
{
    $_SESSION['message'] = 'USER RECORD DELETED SUCCESSFULLY!!';
}
header("location: index.php");

/* 

DELETE FROM table_name
WHERE some_column = some_value

*/

?>