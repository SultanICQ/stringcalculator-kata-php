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
     * @test
     */
    public function i_can_instantiate_a_calculator() {
        // Assert
        $this->assertIsObject($this->calc);
    }

    /**
     * @test
     */
    public function when_i_send_empty_arguments_calc_returns_zero_int() {

        $sum = $this->calc->Add("");

        $this->assertIsInt($sum);
        $this->assertSame(0, $sum);
    }

    /**
     * @test
     */
    public function when_i_send_a_string_with_the_number_one_calc_returns_the_same_number_as_int() {

        $sum = $this->calc->Add("1");

        $this->assertIsInt( $sum );
        $this->assertSame( 1, $sum );
    }

    /**
     * @test
     */
    public function when_i_send_a_string_with_the_number_two_calc_returns_the_same_number_as_int() {

        $sum = $this->calc->Add("2");

        $this->assertIsInt( $sum );
        $this->assertSame( 2, $sum );
    }

}
