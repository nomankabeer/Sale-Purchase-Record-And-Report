<?php

namespace App;


class CommonHelper{

    public static function humanDate($date){
        return date_format(new \DateTime($date), "d-M-Y");
    }
}
