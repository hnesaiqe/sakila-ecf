<?php

class Category extends Database{

    public static function all() {
        $categories = self::query(' SELECT *
                                    FROM category
                                ');
        return $categories->fetchAll();
        // var_dump($categories);
    }
    

    public static function read($id) {
        $category = self::query("SELECT * FROM category WHERE category_id=$id");
        return $category->fetch();
    }

    public static function readByCat($id) {
        $category = self::query("SELECT * FROM category, WHERE category_id=$id");
        return $category->fetch();
    }
    
}