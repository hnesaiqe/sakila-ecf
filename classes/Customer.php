<?php

class Customer extends Database
{
    public static function all()
    {
        $customers = self::query('      SELECT * 
                                        FROM customer');
        return $customers->fetchAll();
    }


    public static function read($id)
    {
        $customer = self::query("       SELECT * 
                                        FROM customer 
                                        WHERE customer_id = $id");
        return $customer->fetch();
    }

//     public static function readById($id)
//     {
//         $customer = self::query("   SELECT * 
//                                 FROM customer
//                                 WHERE film.customer_id = $id");
//         return $customer->fetchAll();
//     }
    
}
