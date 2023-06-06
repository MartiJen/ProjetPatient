<?php
class DataBase {
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $conn;
    private $instance = null;

    public function __construct()
    {
  
    }

    public function connect(){
      $this->conn = null;

    try{
      $pdo = new PDO("mysql:host=localhost;dbname=hospitale2n", "charset=utf8", "root", null);
    
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo 'Connexion réussie';
       }

      catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
      }

    }

    public static function getInstance(){
      if (self::$instance === null) {
        self::$instance = new PDO("mysql:host=localhost;dbname=hospitale2n", "charset=utf8", "root", null);
      }
      return self::$instance;
    } 

}