<?php

namespace Asymptix\core;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-08-03 at 19:26:54.
 */
class ToolsTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Tools
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Tools;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    /**
     * Generated from @assert ("test") == "Test".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst() {
        $this->assertEquals(
                "Test"
                , Tools::upperCaseFirst("test")
        );
    }

    /**
     * Generated from @assert ("Test") == "Test".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst2() {
        $this->assertEquals(
                "Test"
                , Tools::upperCaseFirst("Test")
        );
    }

    /**
     * Generated from @assert ("тест") == "Тест".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst3() {
        $this->assertEquals(
                "Тест"
                , Tools::upperCaseFirst("тест")
        );
    }

    /**
     * Generated from @assert ("Тест") == "Тест".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst4() {
        $this->assertEquals(
                "Тест"
                , Tools::upperCaseFirst("Тест")
        );
    }

    /**
     * Generated from @assert ("test case") == "Test case".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst5() {
        $this->assertEquals(
                "Test case"
                , Tools::upperCaseFirst("test case")
        );
    }

    /**
     * Generated from @assert ("Test case") == "Test case".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst6() {
        $this->assertEquals(
                "Test case"
                , Tools::upperCaseFirst("Test case")
        );
    }

    /**
     * Generated from @assert ("тест кейс") == "Тест кейс".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst7() {
        $this->assertEquals(
                "Тест кейс"
                , Tools::upperCaseFirst("тест кейс")
        );
    }

    /**
     * Generated from @assert ("Тест кейс") == "Тест кейс".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst8() {
        $this->assertEquals(
                "Тест кейс"
                , Tools::upperCaseFirst("Тест кейс")
        );
    }

    /**
     * Generated from @assert ("test case") != "test case".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst9() {
        $this->assertNotEquals(
                "test case"
                , Tools::upperCaseFirst("test case")
        );
    }

    /**
     * Generated from @assert ("Test case") != "test case".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst10() {
        $this->assertNotEquals(
                "test case"
                , Tools::upperCaseFirst("Test case")
        );
    }

    /**
     * Generated from @assert ("тест кейс") != "тест кейс".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst11() {
        $this->assertNotEquals(
                "тест кейс"
                , Tools::upperCaseFirst("тест кейс")
        );
    }

    /**
     * Generated from @assert ("Тест кейс") != "тест кейс".
     *
     * @covers \Asymptix\core\Tools::upperCaseFirst
     */
    public function testUpperCaseFirst12() {
        $this->assertNotEquals(
                "тест кейс"
                , Tools::upperCaseFirst("Тест кейс")
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isFormSubmitted
     * @todo   Implement testIsFormSubmitted().
     */
    public function testIsFormSubmitted() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::getFieldValue
     * @todo   Implement testGetFieldValue().
     */
    public function testGetFieldValue() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::setFieldValue
     * @todo   Implement testSetFieldValue().
     */
    public function testSetFieldValue() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isFilterExists
     * @todo   Implement testIsFilterExists().
     */
    public function testIsFilterExists() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::getFilterValue
     * @todo   Implement testGetFilterValue().
     */
    public function testGetFilterValue() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::rememberField
     * @todo   Implement testRememberField().
     */
    public function testRememberField() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::forgotField
     * @todo   Implement testForgotField().
     */
    public function testForgotField() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::forgotFields
     * @todo   Implement testForgotFields().
     */
    public function testForgotFields() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::changeFieldValue
     * @todo   Implement testChangeFieldValue().
     */
    public function testChangeFieldValue() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::castFieldValue
     * @todo   Implement testCastFieldValue().
     */
    public function testCastFieldValue() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::normalizeCheckboxes
     * @todo   Implement testNormalizeCheckboxes().
     */
    public function testNormalizeCheckboxes() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::removeFields
     * @todo   Implement testRemoveFields().
     */
    public function testRemoveFields() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isInteger
     * @todo   Implement testIsInteger().
     */
    public function testIsInteger() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isDouble
     * @todo   Implement testIsDouble().
     */
    public function testIsDouble() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isDoubleString
     * @todo   Implement testIsDoubleString().
     */
    public function testIsDoubleString() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::toDouble
     * @todo   Implement testToDouble().
     */
    public function testToDouble() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isNumeric
     * @todo   Implement testIsNumeric().
     */
    public function testIsNumeric() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isBoolean
     * @todo   Implement testIsBoolean().
     */
    public function testIsBoolean() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isString
     * @todo   Implement testIsString().
     */
    public function testIsString() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isObject
     * @todo   Implement testIsObject().
     */
    public function testIsObject() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::isInstanceOf
     * @todo   Implement testIsInstanceOf().
     */
    public function testIsInstanceOf() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::lowerCaseFirst
     * @todo   Implement testLowerCaseFirst().
     */
    public function testLowerCaseFirst() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::upperCaseWords
     * @todo   Implement testUpperCaseWords().
     */
    public function testUpperCaseWords() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::upperCase
     * @todo   Implement testUpperCase().
     */
    public function testUpperCase() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \Asymptix\core\Tools::lowerCase
     * @todo   Implement testLowerCase().
     */
    public function testLowerCase() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}