<?php
 include('../navbar.php');
?>

<script>
    $.getJSON("https://api.jikan.moe/v3/anime/73", function(result){ 
        console.log(result);
    });
</script>

<?php
 include('../footer.php');
?>
