<?php

class Inventory extends Database
{

    public static function all()
    {
        $inventories = self::query(' SELECT *
                                    FROM inventory
                                ');
        return $inventories->fetchAll();
    }


    public static function read($id)
    {
        $inventory = self::query("SELECT * 
                                    FROM inventory 
                                    WHERE inventory_id=$id");
        return $inventory->fetch();
    }

    public static function readByFilm($id)
    {
        $inventory = self::query("SELECT * 
                                    FROM inventory 
                                    WHERE film_id=$id");
        return $inventory->fetchall();
    }

    public static function readByStore($id)
    {
        $inventory = self::query("SELECT *, COUNT(film_id) nbr
                                    FROM inventory 
                                    WHERE store_id=$id 
                                    GROUP BY film_id ");
        return $inventory->fetchall();
    }

    // public static function readByCat($id)
    // {
    //     $inventory = self::query("SELECT * FROM inventory, WHERE inventory_id=$id");
    //     return $inventory->fetch();
    // }
}
