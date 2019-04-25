<?php

namespace Bardiz12\AHPDss;

class MatrixCalculator 
{
    public static function pow(array $matrix,$power){

    }
    public static function multiply(array $m1, array $m2){
        $ar = [];
        for ($i=0; $i < count($m1); $i++) { 
            $ar[$i] = [];
            for ($j=0; $j < count($m2); $j++) { 
                //if(!isset($ar[$i][$j])){
                    $ar[$i][$j] = 0;
                //}
                for ($k=0; $k < count($m1); $k++) { 
                    $ar[$i][$j] += $m1[$i][$k] * $m2[$k][$j];
                }
                
            }
        }
        return ($ar);
    }

    private static function checkValidity(array $matrix){
        
    }
}
