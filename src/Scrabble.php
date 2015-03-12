<?php

    class Scrabble
    {
        function getScore($word)
        {
            $scoreKeeper = ['A' => 1];
            return $scoreKeeper[$word];
        }
    }

 ?>
