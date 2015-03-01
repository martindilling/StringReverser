<?php namespace Reverser;

class WordReverser
{

    public function reverse($string)
    {
        $result = '';
        $word = '';
        for ($i = 0; $i < mb_strlen($string); $i++) {
            if ($string[$i] === ' ') {
                $result = $result . $word . ' ';
                $word = '';
                continue;
            }
            $word = $string[$i] . $word;
        }

        return $result . $word;
    }
}
