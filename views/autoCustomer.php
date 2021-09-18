<?php


// PDO connect *********
function connect() {
          return new PDO('mysql:host=localhost;dbname=sakila', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
     //  Films
$pdo = connect();

$keyword = '%'.$_POST['keyword'].'%';
var_dump($keyword);
 
$sql = "SELECT * FROM customer WHERE first_name LIKE (:keyword) ORDER BY customer_id ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$listCustomer = $query->fetchAll();
          foreach ($listCustomer as $data) {
             // put in bold the written text
                    $first_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $data['first_name']);
             // add new option
                    echo '<li onclick="set_item_customer(\''.$data['first_name'].'\')">'.$first_name.'</li>';
     }
    