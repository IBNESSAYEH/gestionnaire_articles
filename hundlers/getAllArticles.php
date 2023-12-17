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
            <a href="" class="btn btn-outline-primary">update</a> 
            <a href="" class="btn btn-outline-danger">delete</a>
      </td>

    </tr>

<?php 
endforeach 
?>

