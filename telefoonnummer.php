<?php


$pattern = '/[+][0-9]{11}/m';
$pattern2 = '/0[0-9]{9}/m';
$pattern3 = '/[+]316[0-9]{8}/m';
$input = $argv[1];
if (preg_match($pattern, $input) || preg_match($pattern2, $input) || preg_match($pattern3, $input)) {
    echo("$input is een geldig telefoonnummer" . PHP_EOL);
} else {
    echo("$input is niet een geldig telefoonnummer" . PHP_EOL);
}

if (preg_match('/[+]{1}[0-9]{2}/m', $input, $matches)) {
    print_r($matches[0] . " is de landcode");
//    $StringArray = str_split($input);
//    print_r($StringArray[0] . $StringArray[1] . $StringArray[2]);
} else {
    echo("no match");
}

