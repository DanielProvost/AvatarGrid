<?php

class Avatar{

    private $taille = 5;
    private $colors;

    public function getRandomColor()
    {
        $chars = str_split('ABCDEF0123456789');
        $color = '#';
        for($i = 0 ; $i < 6 ; $i++){
            $color .= $chars[rand(0, count($chars) - 1)];
        }
        return $color;
    }
}

