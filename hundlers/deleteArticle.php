<?php 
include '../models/ArticlesModel.php';

ArticlesModel::deleteArticle($_GET['id']);