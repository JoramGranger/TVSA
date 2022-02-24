<h3 class="blue-text">SCHEDULE PROGRAM</h3>
<form action="app.php" method="POST">
    <div class="row">
        <div class="input-field col l2">
            <button name="back-program" class="btn blue">Back</button>
        </div>
        <div class="col l6">
            <h5 class="center">New Schedule Details</h5>
        </div>
    </div>
</form>

<form action="" name="addScheduleForm" class="container" method="POST" enctype="multipart/form-data" autocomplete="off" onsubmit="return validator()">
    <div class="row section">
        <div class="col l5 s12">
            <div class="input-field">
                <input name="programe-name" type="text" id="programe-name">
                <label for="programe-name">PROGRAM NAME</label>
            </div>
            <div class="input-field">
                <select name="rating">
                  <option value="GA">GENERAL AUDIENCE</option>
                  <option value="PG">PARENTAL GUIDANCE</option>
                  <option value="MA">MATURE AUDIENCE</option>
                </select>
                <label for="rating">Rating</label>
            </div>
            <div class="input-field">
                <input name="presenter" type="text" id="presenter">
                <label for="presenter">PRESENTER</label>
            </div>
            <div class="input-field">
                <input name="starttime" type="time" id="starttime" value="00:00">
                <label for="starttime">START TIME</label>
            </div>
            <div class="input-field">
                <input name="endtime" type="time" id="endtime" value="00:00">
                <label for="endtime">END TIME</label>
            </div>          
        </div>
        <div class="col l5 s12">
            <div class="input-field">
                <select name="stagenumber">
                  <option value="STAGE A">STAGE A</option>
                  <option value="STAGE B">STAGE B</option>
                  <option value="STAGE C">STAGE C</option>
                </select>
                <label for="stagenumber">STAGE NAME</label>
            </div>
            <div class="input-field">
                <input name="guests" type="text" id="guests">
                <label for="guests">GUESTS</label>
            </div>
            <div class="input-field">
                <input name="producer" type="text" id="producer">
                <label for="producer">PRODUCER</label>
            </div> 
        </div>
        <div class="input-field center">
            <button name="createaccount-admin" class="btn-large center blue waves-effect ">Create Account</button>
        </div>
    </div>
</form>