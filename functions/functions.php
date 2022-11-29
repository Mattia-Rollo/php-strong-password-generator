<?php
// function passwordGen($password, $options, $passLength, $repeat)
// {
//     $lettere = 'abcdefghilmnopqrstuvz';
//     $numeri = '1234567890';
//     $simboli = '@%$!*#';



//     if (isset($options) && isset($passLength)) {
//         while (strlen($password) < intval($passLength)) {
//             if (in_array('lettere', $options)) {
//                 $numRand = rand(1, strlen($lettere));
//                 $password .= substr($lettere, $numRand, 1);
//             }
//             if (in_array('lettereMaiuscole', $options)) {
//                 $numRand = rand(1, strlen($lettere));
//                 $password .= substr(strtoupper($lettere), $numRand, 1);
//             }
//             if (in_array('numeri', $options)) {
//                 $numRand = rand(1, strlen($numeri));
//                 $numFromString = substr($numeri, $numRand, 1);
//                 if (str_contains($password, $numFromString) && ($repeat == 'false')) {
//                 } else {
//                     $password .= $numFromString;
//                 }
//             }
//             if (in_array('simboli', $options)) {
//                 $numRand = rand(1, strlen($simboli));
//                 $password .= substr($simboli, $numRand, 1);
//             }
//         }
//         return $password;
//     }
// }

function passwordGen2($password, $options, $passLength, $repeat)
{
    $lettere = 'abcde'; //fghilmnopqrstuvz
    $numeri = '123'; //4567890
    $simboli = '@%$!*#';
    $stringAllInOne = '';
    if (isset($options) && isset($passLength)) {
        if (in_array('lettere', $options)) {
            $stringAllInOne .= $lettere;
        }
        if (in_array('lettereMaiuscole', $options)) {
            $stringAllInOne .= strtoupper($lettere);
        }
        if (in_array('numeri', $options)) {
            $stringAllInOne .= $numeri;
        }
        if (in_array('simboli', $options)) {
            $stringAllInOne .= $simboli;
        }


        while (strlen($password) < intval($passLength)) {
            $numRand = rand(1, strlen($stringAllInOne));
            $character = substr($stringAllInOne, $numRand, 1);
            if (str_contains($password, $character) && ($repeat == 'false')) {
            } else {
                $password .= substr($stringAllInOne, $numRand, 1);

            }
        }
    }
    return $password;
}


?>