<?php

class Language extends Database
{

    public static function all()
    {
        $languages = self::query(' SELECT *
                                    FROM language
                                ');
        return $languages->fetchAll();
        var_dump($languages);
    }


    public static function read($id)
    {
        $language = self::query("SELECT * FROM language WHERE language_id=$id");
        return $language->fetch();
    }
    public static function readByLanguage($id)
    {
        $language = self::query("SELECT * FROM language, film WHERE film_id=$id");
        return $language->fetch();
    }
}
