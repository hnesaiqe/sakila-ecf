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
}
