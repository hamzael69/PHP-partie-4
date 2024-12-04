<?php

function test($lastname = "Castagne", $firstname = "Simon", $age = 30){
    return "Bonjour " . $lastname ." " . $firstname . " vous avez " . $age . " ans." ;
}

echo test(); 