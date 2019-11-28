<?php
// include the website navbar
 include('../navbar.php');
// function to verify the admin
 verifyAdmin();
?>

<div class="container">
    <table class="table" id="managePostTable">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">User</th>
            <th scope="col">Timestamp</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $FetchArticles = "SELECT ID, ArticleName, ArticleSubTitle, User, Timestamp FROM omoore94_animerooms.cmsarticles ORDER BY ID DESC";        
            $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
            while($row = mysqli_fetch_assoc($FetchArticlesResult)){
            ?>
                <tr class="managePostTR">
                <th><?= $row['ID']; ?></th>
                <td><?= $row['ArticleName']; ?></td>
                <td><?= $row['ArticleSubTitle']; ?></td>
                <td><?= $row['User']; ?></td>
                <td><?= $row['Timestamp']; ?></td>
                </tr>
            <?php
            }
        ?>
        </tbody>
    </table>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>