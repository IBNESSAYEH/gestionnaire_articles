<?php
require '../models/ArticlesModel.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  

    $newArticle = new ArticlesModel();
    $newArticle->setTitre($_POST["articleTitle"]) ;
    $newArticle->setContenu($_POST["articleContent"]) ;
    $newArticle->createArticle();

}