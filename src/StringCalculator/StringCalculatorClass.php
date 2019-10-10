<?php

namespace StringCalculator;

class StringCalculatorClass
{
    public function Add(string $string):Int
    {
        $values = explode(",", $string );
        $sum = 0;
        foreach( $values as $num ) {
            $sum+=(int)$num;
        }
        return $sum;
    }
}
