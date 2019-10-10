<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use StringCalculator\StringCalculatorClass;

class StringCalculatorTest extends TestCase
{
    private $calc;

    protected function setUp():void
    {
        $this->calc = new StringCalculatorClass();
        parent::setUp();
    }

    /**
     * @dataProvider single_number_provider
     * @param String $argument
     * @param Int $expected
     */
    public function test_when_i_send_empty_or_single_arguments_calc_returns_valid_int( $argument, $expected ) {

        $sum = $this->calc->Add( $argument );

        $this->assertSame( $expected, $sum );
    }

    public function single_number_provider() {
        return [
            ["", 0],
            ["0", 0],
            ["1", 1],
            ["2", 2],
        ];
    }

    /**
     * @dataProvider couples_number_provider
     */
    public function test_when_i_send_couple_of_numbers_with_comma_separator_calc_returns_the_right_sum_as_int() {

        $sum = $this->calc->Add("1,2");

        $this->assertSame( 3, $sum );
    }

    public function couples_number_provider() {
        return [
            ["0,1", 1],
            ["1,2", 3],
            ["4,5", 9],
            ["10,23", 33],
        ];
    }

}
