<?php
require '../models/ArticlesModel.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  
    $titre = $_POST["articleTitle"]; 
    $content = $_POST["articleContent"]; 
    $newArticle = new ArticlesModel();
    $newArticle->createArticle($titre , $content);

}