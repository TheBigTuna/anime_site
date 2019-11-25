<?php
 include('../navbar.php');
?>

<div class="container">
        <h4>Enter Text</h4>
        <input type="text" id="createPostEnterTitle" class="form-control" placeholder="Enter Title">

        <h4>Post Type</h4>
            <select class="form-control" id="CreatePostSelectPostType">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>

        <h4>Upload Content</h4>
        <textarea id="createPostTextBox" rows="20" cols="130"></textarea>

        <h4>Select Tags</h4>
        <?php
        $sql = "SELECT * FROM omoore94_animerooms.cmstags";        
        $result = $conn->query($sql);
        
        while($row = $result->fetch_array()){
            print_r($row);
        }
        
        ?>
        <div class="form-check" id="CreatePostSelectTags">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
        </div>

        <h4>Upload Images</h4>
        <input type="file" name="img" multiple>
        <br>
        <input class="btn btn-primary mb-5 mt-5" type="submit" value="Upload">
</div>