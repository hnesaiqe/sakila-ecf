<?php

class Staff extends Database
{

    public static function all()
    {
        $staffs = self::query(' SELECT *
                                    FROM staff
                                ');
        return $staffs->fetchAll();
        var_dump($staffs);
    }


    public static function read($id)
    {
        $staff = self::query("SELECT * FROM staff WHERE staff_id=$id");
        return $staff->fetch();
    }

}
