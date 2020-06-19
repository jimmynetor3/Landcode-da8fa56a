<?php

$input = $argv[1];
$pattern = '/[+][0-9]{11}/m';
$pattern2 = '/0[0-9]{9}/m';
$landcode = '/[+]{1}[0-9]{2}/m';
//$landcode2 = '/[+]{1}[0-9]{2}/m';


if (preg_match($pattern, $input, $matches) || preg_match($pattern2, $input, $matches)) {
    if ($matches[0] === $input) {
        echo("$input is een geldig telefoonnummer" . PHP_EOL);
    } else {
        echo("is niet een geldig telefoonnummer" . PHP_EOL);
    }
}

if (preg_match($landcode, $input, $matches)) {
    print_r($matches[0] . " is de landcode");
} else {
    echo("no match");
}

