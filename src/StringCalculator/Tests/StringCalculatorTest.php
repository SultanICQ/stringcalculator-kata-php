<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use StringCalculator\StringCalculatorClass;

class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function i_can_instantiate_a_calculator() {
        // Arrange
        $calc = new StringCalculatorClass();

        // Act

        // Assert
        $this->assertIsObject( $calc );
    }

    /**
     * @test
     */
    public function when_i_send_empty_arguments_calc_returns_zero_int() {
        // Arrange
        $calc = new StringCalculatorClass();

        // Act
        $sum = $calc->Add("");

        // Assert
        $this->assertSame(0, $sum);
    }

}
