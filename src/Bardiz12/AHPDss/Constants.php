<?php

namespace Bardiz12\AHPDss;

class Constants
{
    public static $ir = [
        0.00,
        0.00,
        0.58,
        0.90,
        1.12,
        1.24,
        1.32,
        1.41,
        1.45,
        1.49,
        1.51,
        1.48,
        1.56,
        1.57,
        1.59
    ];

    public static function getIR($matrix_size){
        return isset(self::$ir[$matrix_size-1]) ? self::$ir[$matrix_size-1] : null;
    }
}
