<?php namespace Reverser\Tests;

use Reverser\WordReverser;

class WordReverserTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function given_an_empty_string()
    {
        $string = '';
        $expect = '';

        $this->assertReversing($expect, $string);
    }

    /** @test */
    public function given_word()
    {
        $string = 'hello';
        $expect = 'olleh';

        $this->assertReversing($expect, $string);
    }

    /** @test */
    public function given_two_words()
    {
        $string = 'hello world';
        $expect = 'olleh dlrow';

        $this->assertReversing($expect, $string);
    }

    /** @test */
    public function given_many_words()
    {
        $string = 'hello world! How are you doing today?';
        $expect = 'olleh !dlrow woH era uoy gniod ?yadot';

        $this->assertReversing($expect, $string);
    }

    /**
     * @param string $expect
     * @param string $string
     */
    protected function assertReversing($expect, $string)
    {
        $reverser = new WordReverser();

        $this->assertEquals($expect, $reverser->reverse($string));
    }
}
