<?php

class Film extends Database
{


    public static function all()
    {
        $films = self::query('  SELECT * 
                                FROM film 
                                INNER JOIN language as lg ON film.language_id = lg.language_id                                
                                INNER JOIN film_category ON film.film_id = film_category.film_id 
                                INNER JOIN category ON film_category.category_id = category.category_id');
        return $films->fetchAll();
    }


    public static function read($id)
    {
        $film = self::query("SELECT * FROM film WHERE film_id=$id");
        return $film->fetch();
    }

    public static function readById($id)
    {
        $film = self::query("   SELECT * 
                                FROM film,film_category
                                WHERE film.film_id = $id");
        return $film->fetchAll();
    }
    public static function readByCatId($id)
    {
        $film = self::query("   SELECT film_id 
                                FROM film_category
                                WHERE category_id = $id");
        return $film->fetchAll();
    }
}
