<?php
include  '../models/ArticlesModel.php';
 
$article = new ArticlesModel();
$articles = $article->getAllArticles();
foreach($articles as $value):


 


?>
    <tr>
      <th scope="row"><?= $value['titre']  ?>  </th>
      <td colspan="2"><?= $value['contenu']  ?> </td>
      <td><?= $value['date_de_creation']  ?> </td>
    </tr>
<?php 
endforeach 
?>

