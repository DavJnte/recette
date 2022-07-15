<?php
function encryptPassword( $password ) {
    $encrypted = "";
    for( $i = strlen($password) - 1; $i >= 0 ; $i-- ) {
        $encrypted .= chr(ord($password[$i]) + 1);
    }
    return $encrypted;
}

function decryptPassword( $password ) {
    $decrypted = "";
    for( $i = strlen($password) - 1; $i >= 0 ; $i-- ) {
        $decrypted .= chr(ord($password[$i]) - 1);
    }
    return $decrypted;
}

var_dump( encryptPassword("test123") ); // ==> 32utfu
var_dump( decryptPassword("432utfu") ); // ==> test123

?>