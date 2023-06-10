<?php

class YinYang
{
    public static function Game(int $num_1, int $num_2)
    {

        if ($num_1 >= $num_2) {
            exit(' please read the Game Condition');
        }

        while ($num_1 <= $num_2) {

            $output = null;

            if ($num_1 % 3 == 0) $output = 'Yin';

            if ($num_1 % 5 == 0) $output .= 'Yang';

            echo ($output ?? $num_1) . '<br>';

            $num_1++;
        }
    }
}


YinYang::Game(1, 15);
