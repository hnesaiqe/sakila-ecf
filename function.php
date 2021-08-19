<?php
function pdo_connect_mysql() {
    $servername = "localhost";
    $username = "root";
    $password = "58Lj9pqJNHAabK9O";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=sakila", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connecté avec succès";
      return $conn;
    } catch(PDOException $e) {
      echo "La connexion a échoué: " ;
      return false;
    } 
    
}