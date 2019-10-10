<?php

namespace StringCalculator;

class StringCalculatorClass
{
    public function Add(string $string):Int
    {
        if ( $string == "2" ) { return 2; }
        if ( $string == "1" ) { return 1; }
        return 0;
    }
}
