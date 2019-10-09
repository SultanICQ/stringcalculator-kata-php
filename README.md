# String Calculator Kata PHP

## Description

First PHP Kata. Trying to implement the String Calculator from scratch via TDD

### Kata Instructions

Read the [kata instructions](kata/Instructions.md).

### Configure PHPStorm to run the tests

- Choose ``Run``, ``Edit configurations...`` and remove any existing configuration.
- Select ``Defaults - PHPUnit``, put a check before ``Use alternative configuration file`` and select
  ``phpunit.xml.dist`` from this project.
- Click the button to the right of this field. In the dialog that appears select ``Use custom loader`` and select the
  file ``vendor/autoload.php`` inside your project. This will make sure PHPStorm uses the bundled version of PHPUnit.

To validate your setup once you have installed this project, run the tests: right-click on the ``src/`` directory and
then select ``Run 'src'``.

## Run the unit tests

To run all tests in a testcase press ``Ctrl + Shift + F10`` when the cursor is *not* inside a method.
To run one test press ``Ctrl + Shift + F10`` when the cursor is inside a method.
To repeat the previous test run press ``Shift + F10``.

Or you can run the tests from the command-line:

    php vendor/bin/phpunit

When you first run the tests, PHPStorm might ask you to supply a PHP interpreter.

## PHPUnit cheatsheet

You can use my [PHPUnit cheatsheet](https://github.com/matthiasnoback/workshop-unit-testing/blob/master/cheatsheet.md)
as a quick reference for PHPUnit usage.
