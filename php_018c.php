<?php
$a = 25;
$b = 20;

if ($a > $b){
    print("A es mayor que B y su valor es ". $a ."<br>");
}else{
    if($a < $b){
        print("B es mayor que A y su valor es ". $b ."<br>");
    }else{
        print("A y B son iguales y su valor es: ". $b ."<br>");
    }
}

//con elseif
if($a > $b){
    print("A es mayor que B y su valor es ". $a ."<br>");
}elseif($a < $b){
    print("B es mayor que A y su valor es ". $b ."<br>");
}else{
    print("A y B son iguales y su valor es: ". $a ."<br>");
}