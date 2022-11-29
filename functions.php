<?php

$length_number = $_GET["length_psw"] ?? 0;
var_dump($length_number);

 function generatePassword($lunghezza) {

        $caratteri = genCaratteri($merge);
        $password = '';

        for ($i = 0; $i < $lunghezza; $i++) {
            $random = rand(0, strlen($caratteri) - 1);
            
            $password .= substr($caratteri, $random, 1);
      }

      return $password; }
 

$merge = '';

function genCaratteri($param){
    $char = 'abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbol = ',;:!?.$/*-+&@_+';

    return $param = $char . $numbers . $symbol;
}
?>