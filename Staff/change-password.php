<h3>SETTINGS</h3>
<p id="alert"></p>
<form action="" method="POST" class="row" onsubmit="return settingsValidator()">
    <div class="col l4 m4 s12">
        <div class="input-field">
            <input name="password" type="password" id="password">
            <label for="password">New Password</label>
        </div>
        <div class="input-field">
            <input name="repeatpassword" type="password" id="repeatpassword">
            <label for="repeatpassword">Repeat Password</label>
        </div>
        <div class="input-field">
            <button name="apply-settings" class="btn red">Apply Changes</button>
        </div>
    </div>
</form>