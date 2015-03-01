<?php namespace Reverser\Tests;

use Reverser\WordReverser;

class WordReverserTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function given_an_empty_string()
    {
        $reverser = new WordReverser();

        $this->assertEquals('', $reverser->reverse(''));
    }

    /** @test */
    public function given_single_character()
    {
        $reverser = new WordReverser();

        $this->assertEquals('a', $reverser->reverse('a'));
    }

    /** @test */
    public function given_two_character_string()
    {
        $reverser = new WordReverser();

        $this->assertEquals('ba', $reverser->reverse('ab'));
    }

    /** @test */
    public function given_three_character_string()
    {
        $reverser = new WordReverser();

        $this->assertEquals('cba', $reverser->reverse('abc'));
    }

    /** @test */
    public function given_two_words()
    {
        $reverser = new WordReverser();

        $this->assertEquals('ba dc', $reverser->reverse('ab cd'));
    }

    /** @test */
    public function given_many_words()
    {
        $reverser = new WordReverser();

        $this->assertEquals('olleh !dlrow woH era uoy gniod ?yadot', $reverser->reverse('hello world! How are you doing today?'));
    }
}
