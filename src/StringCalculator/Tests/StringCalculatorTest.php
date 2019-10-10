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
        $this->assertIsInt($sum);
        $this->assertSame(0, $sum);
    }

    /**
     * @test
     */
    public function when_i_send_a_string_with_the_number_one_calc_returns_the_same_number_as_int() {
        // Arrange
        $calc = new StringCalculatorClass();

        // Act
        $sum = $calc->Add("1");

        // Assert
        $this->assertIsInt( $sum );
        $this->assertSame( 1, $sum );
    }

    /**
     * @test
     */
    public function when_i_send_a_string_with_the_number_two_calc_returns_the_same_number_as_int() {
        // Arrange
        $calc = new StringCalculatorClass();

        // Act
        $sum = $calc->Add("2");

        // Assert
        $this->assertIsInt( $sum );
        $this->assertSame( 2, $sum );
    }

}
