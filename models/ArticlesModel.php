
<?php 
require 'connections.php';
Class ArticlesModel extends Connections {
    
    public function createArticle($titre,	$contenu){
        $db = $this->connect();
        if($db == null){
            
            return ;
        }
        
        $stmt = $db->prepare("INSERT INTO article (titre,	contenu,	date_de_creation,	user_id	)
        VALUES (:titre,	:contenu,	:date_de_creation,	:user_id)");

        $date_de_creation = date("Y-m-d");
        $user_id = 1;
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':date_de_creation', $date_de_creation);
        $stmt->bindParam(':user_id', $user_id);

        $stmt->execute();
        $stmt = null;
        $db = null;
    }

    public function updateArticle($titre,	$contenu,	$date_de_creation){
        $db = $this->connect();
        if($db === null){
            return ;
        }
        $stmt = $db->prepare("UPDATE  article SET titre = :titre,	contenu = :contenu,	date_de_creation = :date_de_creation)");
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':date_de_creation', $date_de_creation);

        $stmt->execute();
        $stmt = null;
        $db = null;
    }

    public function deleteArticle($id){
        $db = $this->connect();
        if($db === null){
            return ;
        }
        $stmt = $db->prepare("DELETE FROM  article WHERE id = :id");
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        $stmt = null;
        $db = null;
    }
    public function getAllArticles(){
        $db = $this->connect();
        if($db === null){
            return ;
        }
        $stmt = $db->prepare("SELECT `Id`, `titre`, `contenu`, `date_de_creation`, `user_id` FROM  article");
       

        $stmt->execute();
        $data = $stmt->fetchAll();


        $stmt = null;
        $db = null;
        return $data;
    }


  
  
   




}

