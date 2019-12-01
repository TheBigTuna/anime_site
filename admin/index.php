<!-- Admin Login page -->
<?php
 include('../navbar.php');
 if(isset($_SESSION['IsAdmin'])){
    header('Location: /anime_site/admin/main.php');
 }
?>

<!-- Form to login as a admin -->
<div class="container">
    <form action="verifyLogin.php" method="POST">
        <div class="form-group text-center">
            <input type="text" class="form-control" id="InputAdminUser" name="adminUser" placeholder="Enter Username" maxlength="30">
            <input type="password" class="form-control" id="InputAdminPassword" name="adminLogin" placeholder="Enter Password" maxlength="30">
            <button class="btn btn-primary" id="submitAdminPassword">Submit</button>
        </div>
    </form>
</div>