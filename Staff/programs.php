<h3 class="center blue-text">PROGRAMS</h3>
<form action="app.php" method="POST">
    <div class="row">
        <div class="input-field col l2">
            <button name="schedule-program" class="btn blue">Schedule Program</button>
        </div>
    </div>
</form>
<div class="section">
<table id="programs-table" class="display dataTable" data-page-length='5'>
    <thead>
    <tr>
        <!-- PID 	PROGRAMNAME 	PRESENTER 	STAGENAME 	STARTTIME 	ENDTIME 	DAY 	RATING 	CREATOR 	STATUS 	GUESTS 	PRODUCER 	 -->	
        <th>NAME</th>
        <th>PRESENTER</th>
        <th>STAGE / ROOM</th>
        <th>START TIME</th>
        <th>END TIME</th>
        <th>DAY</th>
        <th>RATING</th>
        <th>CREATOR</th>
        <th>STATUS</th>
        <th>GUESTS</th>
        <th>PRODUCER</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $output;
    $programsQuery = mysqli_query($Link, "SELECT *FROM programs") OR die("CONNECTION FAILED");
    while($programsResult = mysqli_fetch_assoc($programsQuery))
    {
        $pid = $programsResult['PID'];
        $rating;
        if($programsResult['RATING'] == 'GA')
        {
            $rating = 'GENERAL AUDIENCE';
        }
        else if($programsResult['RATING'] == 'PG')
        {
            $rating = 'PARENTAL GUIDANCE';
        }
        else
        {
            $rating = 'MATURE AUDIENCE';
        }
        GLOBAL $output;
        $output .='<tr>'
        . '<td>' . $programsResult['PROGRAMNAME'] . '</td>'
        . '<td>' . $programsResult['PRESENTER'] . '</td>'
        . '<td>' . $programsResult['STAGENAME'] . '</td>'
        . '<td>' . $programsResult['STARTTIME'] . '</td>'
        . '<td>' . $programsResult['ENDTIME'] . '</td>'
        . '<td>' . $programsResult['DAY'] . '</td>'
        . '<td>' . $rating . '</td>'
        . '<td>' . $programsResult['CREATOR'] . '</td>'
        . '<td>' . $programsResult['STATUS'] . '</td>'
        . '<td>' . $programsResult['GUESTS'] . '</td>'
        . '<td>' . $programsResult['PRODUCER'] . '</td>'
        . '</tr>';
    }  
    GLOBAL $output;
    echo $output;
    ?>
    </tbody>
</table>
</div>