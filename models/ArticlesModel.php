<?php 
require 'connections.php';
Class ArticlesModel extends Connections {
    

    public function createArticle($titre,	$contenu,	$date_de_creation,	$user_id){
        $db = $this->connect();
        if($db === null){
            return ;
        }
        $stmt = $db->prepare("INSERT INTO article (titre,	contenu,	date_de_creation,	user_id	)
  VALUES (:titre,	:contenu,	:date_de_creation,	:user_id)");
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':date_de_creation', $date_de_creation);
        $stmt->bindParam(':user_id', $user_id);

        $stmt->execute();
        $stmt = null;
        $db = null;
    }






}

