<?php

  class Post extends Database{

      public static function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM post");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
      }

      public function create(){
        
      }
  }


?>
