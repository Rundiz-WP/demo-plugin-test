<?php
/**
 * Class SampleTest.
 *
 * Use Yoast PHPUnit Polyfills ( https://github.com/Yoast/PHPUnit-Polyfills ).
 *
 * @package Demo_Plugin_Test
 */


use PHPUnit\Framework\TestCase;
use Yoast\PHPUnitPolyfills\Polyfills\AssertIsType;


/**
 * Sample test case.
 */
class TestSample extends TestCase
{


    use AssertIsType;


    /**
     * A single example test.
     */
    public function testSample()
    {
        // Replace this with some actual testing code.
        $this->assertTrue(true);
        // The test below is to make sure that WordPress function can be called and exists.
        $this->assertStringContainsString('hello', wp_unslash('hello'));
    }


}
