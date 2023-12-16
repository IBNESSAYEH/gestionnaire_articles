<?php
require '../config/config.php';
class Connections {



    protected function connect(){
        try {
            return new PDO(CONFIG['db'] , CONFIG['db_username'] , CONFIG['db_password']);
        }catch (PDOException $e){
                return null ;
        }
    }


}






?>


