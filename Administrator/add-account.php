<h3 class="blue-text">STAFF</h3>
<form action="app.php" method="POST">
    <div class="row">
        <div class="input-field col l2">
            <button name="back-account" class="btn blue">Back</button>
        </div>
        <div class="col l6">
            <h5 class="center">New Staff Details</h5>
        </div>
    </div>
</form>

<form action="" name="addAccountForm" class="container" method="POST" enctype="multipart/form-data" autocomplete="off" onsubmit="return validator()">
    <div class="row section">
        <div class="col l6">
            <div class="input-field">
                <input name="username" type="text" id="username">
                <label for="username">USERNAME</label>
            </div>
            <div class="input-field">
                <input name="password" type="password" id="register-password">
                <label for="password">Password</label>
            </div>
            <div class="input-field">
                <input name="repeatpassword" type="password" id="repeatpassword">
                <label for="repeatpassword">Repeat Password</label>
            </div>
            <div class="input-field">
                <select name="gender">
                  <option value="FEMALE">Female</option>
                  <option value="MALE">Male</option>
                </select>
                <label for="gender">Gender</label>
            </div>
            <div class="input-field">
                <select name="position">
                  <option value="PRESENTER">PRESENTER</option>
                  <option value="PRODUCER">PRODUCER</option>
                  <option value="MANAGER">MANAGER</option>
                </select>
                <label>Choose Account Type</label>
            </div>
            <div class="input-field center">
                <button name="createaccount-admin" class="btn-large center blue waves-effect ">Create Account</button>
            </div>
            
        </div>
    </div>
</form>