<?php
function passwordGen($password, $options, $passLength, $repeat)
{
    $lettere = 'abcdefghilmnopqrstuvz';
    $numeri = '1234567890';
    $simboli = '@%$!*#';
    if (isset($options) && isset($passLength)) {
        while (strlen($password) < intval($passLength)) {
            if (in_array('lettere', $options)) {
                $numRand = rand(1, strlen($lettere));
                $password .= substr($lettere, $numRand, 1);
            }
            if (in_array('lettereMaiuscole', $options)) {
                $numRand = rand(1, strlen($lettere));
                $password .= substr(strtoupper($lettere), $numRand, 1);
            }
            if (in_array('numeri', $options)) {
                $numRand = rand(1, strlen($numeri));
                $numFromString = substr($numeri, $numRand, 1);
                if (str_contains($password, $numFromString) && ($repeat == 'false')) {
                } else {
                    $password .= $numFromString;
                }
            }
            if (in_array('simboli', $options)) {
                $numRand = rand(1, strlen($simboli));
                $password .= substr($simboli, $numRand, 1);
            }
        }
        return $password;
    }
}
?>