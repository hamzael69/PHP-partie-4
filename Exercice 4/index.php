<?php

$var1 = 21 ;
$var2 = 21 ;

function plusGrand ( $var1, $var2){

    if($var1 > $var2 ){

    return "Le premier nombre est plus grand";
    }

else if ($var1 < $var2){

    return "Le premier nombre est plus petit";
}

if($var1 = $var2){
    return "Les deux nombres sont identiques";
}

}

echo plusGrand($var1, $var2);