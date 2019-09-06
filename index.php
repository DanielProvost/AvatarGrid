<?php


//function randomColor() {
//    $str = '#';
//    for($i = 0 ; $i < 6 ; $i++) {
//        $randNum = rand(0 , 15);
//        switch ($randNum) {
//            case 10: $randNum = 'A'; break;
//            case 11: $randNum = 'B'; break;
//            case 12: $randNum = 'C'; break;
//            case 13: $randNum = 'D'; break;
//            case 14: $randNum = 'E'; break;
//            case 15: $randNum = 'F'; break;
//        }
//        $str .= $randNum;
//    }
//    return $str;
//}

function getRandomColor()
{
    $chars = str_split('ABCDEF0123456789');
    $color = '#';
    for($i = 0 ; $i < 6 ; $i++){
        $color .= $chars[rand(0, count($chars) - 1)];
    }
    return $color;
}

$colors = [];
for($i=0;$i<3;$i++){
    $colors[]=getRandomColor();
}


$taille = 5;


$avatar = [];

for($i = 0 ; $i < $taille ; $i++){

    $avatar[$i] = [];

    for($j = 0 ; $j < $taille/2 ; $j++){
        $color = $colors[rand(0, count($colors) - 1)];
        $avatar[$i][$j] = $color;
        $avatar[$i][$taille-1-$j]=$color;
    }
}

ob_start();
include 'avatar.svg.tpl';
$svg = ob_get_clean();
$file =fopen('svg/avatar.svg',"w");
fwrite($file,$svg);
fclose($file);


// inclusion du template

include 'index.html';






































