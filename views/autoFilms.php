<?php

// PDO connect *********
 function connect() {
     return new PDO('mysql:host=localhost;dbname=sakila', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 }
//  Films
 $pdo = connect();

$keyword = '%'.$_POST['keyword'].'%';
echo $_POST['keyword'];
$sql = "    SELECT  f.title, f.film_id,i.inventory_id FROM film f 
            LEFT JOIN inventory i ON f.film_id = i.film_id
            LEFT JOIN rental r ON  i.inventory_id = r.inventory_id
            WHERE f.title LIKE (:keyword) AND r.return_date IS NOT NULL  
            GROUP BY f.title
            ORDER BY f.film_id ASC LIMIT 0, 20";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
    foreach ($list as $rs) {
            // put in bold the written text
        $title = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['title']);
            // add new option
        echo '<li onclick="set_item(\''.$rs['title'].'\')">'.$title.'</li>';
    }

    