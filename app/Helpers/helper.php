<?php

namespace App\Helpers;

class Helper
{
    // Function get name admin
    public function getname_Admin($string)
    {

        $regex = "/(http:\/\/\w+.com\/)(\w+)(\/\w+)/";
        // $string="http://book_store.com/huuloc123/user";
        preg_match($regex, $string, $result);
        return $result[2];
    }
}
