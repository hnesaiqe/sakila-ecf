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
    public static function readByCats($id) {
        $category = self::query("SELECT * FROM film_category, category WHERE film_category.category_id = category.category_id AND category.category_id=$id");
        return $category->fetchAll();
    }
    
}