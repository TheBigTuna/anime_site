<?php
// include the website navbar
include('../navbar.php');
// function to verify the admin
 verifyAdmin();
?>

<div class="container">
    <form action="insertPost.php" method="POST">
    <!-- Enter Title -->
        <h4>Enter Text</h4>
        <input type="text" id="createPostEnterTitle" name="Title" class="form-control" placeholder="Enter Title">

    <!-- Select The Type of Post -->
        <h4>Post Type</h4>
            <select class="form-control" name="PostType" id="CreatePostSelectPostType">
                <option selected disabled></option>
                <option value="Article1">Article Type 1</option>
                <option value="Article2">Article Type 2</option>
                <option value="Article3">Article Type 3</option>
                <option value="Gallery">Gallery</option>
                <option value="Video">Video</option>
                <option value="List">List</option>
            </select>

    
    <!-- Article Content -->
        <h4>Upload Text/Content</h4>
        <textarea id="createPostTextBox" name="PostText" rows="15" cols="130"></textarea>

    <!-- Tag article -->
        <h4>Select Tags</h4>
        <small>Select up to 5 tags</small>
        <?php
        $FetchTags = "SELECT * FROM omoore94_animerooms.cmstags";        
        $FetchTagsResult = mysqli_query($conn, $FetchTags);
        ?>
        <div class="form-check" id="CreatePostSelectTags">
        <?php
        while($row = mysqli_fetch_assoc($FetchTagsResult)){
        ?>
        <div class="form-check">
            <input class="form-check-input" name="Tags[]" type="checkbox" value="<?= $row['TagName']; ?>">
            <label class="form-check-label"><?= $row['TagName']; ?></label>
        </div>
        <?php
        }
        ?>
        </div>

    <!-- Add Images to article -->
        <h4>Upload Images</h4>
        <input type="file" name="img" multiple>
        <br>
        <input class="btn btn-primary mb-5 mt-5" type="submit" value="Upload">
    </form>
</div>