<?php
// include the website navbar
 include('../navbar.php');
// function to verify the admin
 verifyAdmin();
?>

<div class="container">
    <a href="createPost.php">
        <button type="button" class="btn btn-dark btn-block adminBtn mb-2">Create Post</button>
    </a>
    <a href="ManagePost.php">
        <button type="button" class="btn btn-dark btn-block adminBtn mt-2">Manage Post</button>
    </a>
</div>
