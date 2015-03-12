<?php

    class Scrabble
    {
        function getScore($word)
        {
            $scoreKeeper = [
                'A' => 1, 'E' => 1, 'I' => 1, 'O' => 1,
                'D' => 2, 'G' => 2,
                'B' => 3, 'C' => 3, 'M' => 3, 'P' => 3,
                'F' => 4
            ];
            $word_letters = str_split($word);
            $score_total = 0;
            foreach ($word_letters as $letter) {
                $score_total += $scoreKeeper[$letter];
            }
            return $score_total;
        }
    }

 ?>
