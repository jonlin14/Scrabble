<?php

    class Scrabble
    {
        function getScore($word)
        {
            $scoreKeeper = ['A', 'E' => 1];
            $word_letters = str_split($word);
            $score_total = 0;
            foreach ($word_letters as $letter) {
                $score_total += $scoreKeeper[$letter];
            }
            return $score_total;
        }
    }

 ?>
