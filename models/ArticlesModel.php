
<?php 
require  'connections.php';
Class ArticlesModel extends Connections {
    private  $id;
    private  $titre;
    private  $contenu;
    private  $date_de_creation;
    private  $user_id;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitre()
    {
        return $this->titre;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;
    }


    public function getContenu()
    {
        return $this->contenu;
    }


    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }


    public function getDateDeCreation()
    {
        return $this->date_de_creation;
    }


    public function setDateDeCreation($date_de_creation)
    {
        $this->date_de_creation = $date_de_creation;
    }


    public function getUserId()
    {
        return $this->user_id;
    }


    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    
    public function createArticle(){
        $db = ArticlesModel::connect();
        if($db == null){
            
            return ;
        }
        
        $stmt = $db->prepare("INSERT INTO article (titre,	contenu,	date_de_creation,	user_id	)
        VALUES (:titre,	:contenu,	:date_de_creation,	:user_id)");

        $date_de_creation = date("Y-m-d");
        $user_id = 1;
        $stmt->bindParam(':titre', $this->titre);
        $stmt->bindParam(':contenu', $this->contenu);
        $stmt->bindParam(':date_de_creation', $this->date_de_creation);
        $stmt->bindParam(':user_id', $this->user_id);

        $stmt->execute();
        $stmt = null;
        $db = null;
    }

    public function updateArticle(){
        $db = ArticlesModel::connect();
        if($db === null){
            return ;
        }
        $stmt = $db->prepare("UPDATE  article SET titre = :titre,	contenu = :contenu,	date_de_creation = :date_de_creation)");
        $stmt->bindParam(':titre', $this->titre);
        $stmt->bindParam(':contenu', $this->contenu);
        $stmt->bindParam(':date_de_creation', $this->date_de_creation);

        $stmt->execute();
        $stmt = null;
        $db = null;
    }

    public function deleteArticle(){
        $db = ArticlesModel::connect();
        if($db === null){
            return ;
        }
        $stmt = $db->prepare("DELETE FROM  article WHERE id = :id");
        $stmt->bindParam(':id', $this->id);

        $stmt->execute();
        $stmt = null;
        $db = null;
    }
    public static  function getAllArticles(){
        $db = ArticlesModel::connect();
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

