<?php namespace Reverser;

class WordReverser
{
    /**
     * @var string
     */
    protected $result;

    /**
     * @var string
     */
    protected $word;

    /**
     * Reverse each word in a string but keep current order of words.
     *
     * @param string $string
     * @return string
     */
    public function reverse($string)
    {
        $this->result = '';
        $this->word   = '';
        $length = mb_strlen($string);

        for ($i = 0; $i < $length; $i++) {
            $this->handleCharacter($string[$i]);
        }

        $this->addToResult($this->word);

        return $this->result;
    }

    /**
     * @param string $char
     */
    protected function handleCharacter($char)
    {
        if ($this->isSpace($char)) {
            $this->addToResult($this->word . ' ');
            $this->word = '';
            return;
        }

        $this->prependToWord($char);
    }

    /**
     * @param string $string
     * @return bool
     */
    protected function isSpace($string)
    {
        return $string === ' ';
    }

    /**
     * @param string $string
     */
    protected function addToResult($string)
    {
        $this->result =  $this->result . $string;
    }

    /**
     * @param string $char
     */
    protected function prependToWord($char)
    {
        $this->word = $char . $this->word;
    }
}
