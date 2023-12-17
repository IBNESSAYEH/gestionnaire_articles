<?php

class Connections {



    protected static function connect(){
        try {
            return new PDO("mysql:host=localhost;dbname=article", "root", "");
        }catch (PDOException $e){
                return null ;
        }
    }


}






?>


