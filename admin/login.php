<?php
 include('../navbar.php');
?>

<div class="container">
    <form action="verifyLogin.php" method="POST">
        <div class="form-group text-center">
            <input type="password" class="form-control" id="InputAdminPassword" name="adminLogin" placeholder="Enter Password" maxlength="30">
            <button class="btn btn-primary" id="submitAdminPassword">Submit</button>
        </div>
    </form>
</div>