<?php

class Actor extends Database
{

    public static function all()
    {
        $actors = self::query(' SELECT actor.first_name, actor.last_name
                                FROM  film_actor 
                                INNER JOIN actor ON actor.actor_id = film_actor.actor_id  
                                INNER JOIN film ON film.film_id = film_actor.film_id
                                ');
        return $actors->fetchAll();
        var_dump($actors);
    }


    public static function read($id)
    {
        $actor = self::query("  SELECT * 
                                FROM actor 
                                WHERE actor_id=$id");
        return $actor->fetch();
    }
    public static function readByFilm($id)
    {
        $actor = self::query("  SELECT * 
                                FROM actor, film_actor 
                                WHERE actor.actor_id = film_actor.actor_id 
                                    AND film_id = $id");
        return $actor->fetchAll();
    }
}
