<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function the_tests_can_be_run_and_classes_are_available_via_the_composer_autoloader()
    {
        if (!class_exists('StringCalculator\StringCalculatorClass')) {
            $this->fail('Make sure you use the "phpunit.xml.dist" from this project as the configuration file for your PHPUnit test runner');
        }
    }
}
