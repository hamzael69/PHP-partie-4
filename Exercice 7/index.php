<?php

$gender = "femme" ;
$age = 18 ;

function test($gender, $age){
    if($gender === "homme" && $age >= 18){
        return "Vous êtes un homme est vous êtes majeur";
    }
   if($gender === "homme" && $age < 18){
        return "Vous êtes un homme est vous êtes mineur";
    }
    if($gender === "femme" && $age >= 18){
        return "Vous êtes une femme est vous êtes majeur";
    }
    if($gender === "femme" && $age < 18){
        return "Vous êtes une femme est vous êtes mineur";
    }

}

echo test($gender, $age);