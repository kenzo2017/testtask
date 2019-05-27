<?php

class login
{
    private $database;
    function __construct($dbcon){
        $this->database = $dbcon;
    }
   public function register($firstName,$lastName,$email)
   {
       try{
           $stmt = $this->database->prepare("INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`) VALUES (NULL, '$firstName', '$lastName', '$email')");
           $stmt->execute();
           return true;
       }
       catch(PDOException $ex){
    die($ex->getMessage());
           return false;
}
   }
}


?>