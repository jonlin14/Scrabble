<?php

    class Scrabble
    {
        function getScore($word)
        {
            $scoreKeeper = [
                'A' => 1, 'E' => 1, 'I' => 1, 'O' => 1, 'U' => 1, 'L' => 1,
                'D' => 2, 'G' => 2,
                'B' => 3, 'C' => 3, 'M' => 3, 'P' => 3,
                'F' => 4, 'H' => 4, 'V' => 4,
                'K' => 5,
                'J' => 8,
                'Q' => 10,
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
