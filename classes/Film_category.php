<?php

class Film_category extends Database
{

    public static function all()
    {
        $filmCategories = self::query(' SELECT *
                                    FROM film_category fc
                                    INNER JOIN film f ON fc.film_id = f.film_id                                
                                    INNER JOIN category c ON fc.category_id = c.category_id');
        return $filmCategories->fetchAll();
        // var_dump($categories);
    }

    public static function readByFilmCat($id)
    {
        $filmCategory = self::query("SELECT * FROM film_category fc, category c , film f WHERE fc.category_id = c.category_id AND fc.film_id = f.film_id  AND c.category_id=$id ");
        return $filmCategory->fetchAll();
        var_dump($filmCategory);
    }
}
