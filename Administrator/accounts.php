<h3>STAFF</h3>
<form action="app.php" method="POST">
    <div class="row">
        <div class="input-field col l2">
            <button name="add-account" class="btn blue">Add Staff</button>
        </div>
    </div>
</form>
<div class="section">
<table id="accounts-table" class="display dataTable" data-page-length='5'>
    <thead>
    <!-- UID	USERNAME	PASSWORD	ACTIVITY	POSITION	GENDER	ACCOUNTTYPE  -->	
    <tr>
        <th>USERNAME</th>
        <th>ACTIVITY</th>
        <th>POSITION</th>
        <th>GENDER</th>
        <th>ACCOUNT TYPE</th>
        <th>ACTIONS</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $viewer;
    $activity;
    $accountsQuery = mysqli_query($Link, "SELECT *FROM accounts") OR die("CONNECTION FAILED");
    while($accountsResult = mysqli_fetch_assoc($accountsQuery))
    {
        $uid = $accountsResult['UID'];
        if($accountsResult['ACTIVITY'] == '1')
        {
            $activity = 'ONLINE';
        }
        else
        {
            $activity = 'OFFLINE';
        }
        GLOBAL $viewer;
        $viewer .='<tr>'
        . '<td>' . $accountsResult['USERNAME'] . '</td>'
        . '<td>' . $activity . '</td>'
        . '<td>' . $accountsResult['POSITION'] . '</td>'
        . '<td>' . $accountsResult['GENDER'] . '</td>'
        . '<td>' . $accountsResult['ACCOUNTTYPE'] . '</td>'
        . '<td>' /* . '<a class="btn black" href="view-account.php?hid=' .$uid . '">' . '<i class="fa fa-eye"></i>&nbsp;View</a>' */
        . '&nbsp;&nbsp;<a class="btn green" href="edit-account.php?uid=' .$uid . '">' . '<i class="fa fa-pen"></i>&nbsp;Edit</a>'
        . '&nbsp;&nbsp;<a class="btn red" href="delete-account.php?uid=' .$uid . '">' . '<i class="fa fa-close"></i>&nbsp;Delete</a>'
        . '</tr>';
    }  
    GLOBAL $viewer;
    echo $viewer;
    ?>
    </tbody>
</table>
</div>