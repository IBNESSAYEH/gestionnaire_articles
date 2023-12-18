<?php
include __DIR__ .  '/../models/ArticlesModel.php';
 

$articles = ArticlesModel::getAllArticles();
foreach($articles as $value):

?>
    <tr>
      <td ><?= $value['titre']  ?>  </td>
      <td ><?= $value['contenu']  ?> </td>
      <td> <?= $value['date_de_creation']  ?> </td>
      <td>  
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal--<?=  $value['Id']  ?>">update</button>
            <!-- Modal -->
<div class="modal fade" id="exampleModal--<?=  $value['Id']  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      </div>
      <div class="modal-body">
      <form action="hundlers/updateArticle.php?id=<?=  $value['Id']  ?>" method="POST">
        <div class="form-group">
            <label for="articleTitle">Title</label>
            <input type="text" class="form-control" name="articleTitle" placeholder="Enter article title">
        </div>
        <div class="form-group">
            <label for="articleContent">Content</label>
            <textarea class="form-control" name="articleContent" rows="5" placeholder="Enter article content"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
            <a href="hundlers/deleteArticle.php?id=<?=  $value['Id']  ?>" class="btn btn-outline-danger">delete</a>
          </td>
          
        </tr>
        
        <?php 
endforeach 
?>
<!-- <?php   include "../views/updateArticle.php"; ?> -->

