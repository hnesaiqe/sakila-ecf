<?php

class Rental extends Database
{

    public static function all()
    {
        $rentals = self::query(' SELECT *
                                    FROM rental
                                ');
        return $rentals->fetchAll();
        var_dump($rentals);
    }

    public static function read($id)
    {
        $rental = self::query("SELECT * FROM rental WHERE rental_id=$id");
        return $rental->fetch();
    }

    public static function insert($val_1,$val_2,$val_3,$val_4) {

        var_dump($val_1);
        var_dump($val_2);
        var_dump($val_3);
        var_dump($val_4);
        $rental = self::query("INSERT INTO `rental`(`return_date`) VALUES :return_date");
        // if(isset($_POST['envoyer'])){
        //     // var_dump($_POST);
        //     try {
        //     // se connecter à mysql
        //     $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
        //     } catch (PDOException $exc) {
        //       echo $exc->getMessage();
        //       exit();
        //     }
        //     // récupérer les valeurs 
        //     $return_date = $_POST['return_date'];
        //     // Requête mysql pour insérer des données
        //     $sql = "INSERT INTO `rental`(`return_date`) VALUES :return_date";
        //     $res = $pdo->prepare($sql);
        //     $exec = $res->execute(array(":return_date" => $return_date));
        //     // vérifier si la requête d'insertion a réussi
        //     if($exec){
        //         echo 'Données insérées';
        //     }else{
        //         echo "Échec de l'opération d'insertion";
        //     }
        // }

    }
}
