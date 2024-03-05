<?php

$a = 'Está é uma string';
$b = "Está é outra string";

echo $a;
echo '<br>';
echo $b;

$c = $a .' '. $b;
echo '<hr>';
echo $c;

echo '<hr>';
echo "$a ok";


$cliente = 'Luís Gabriel';
$email = 'luisgabriel20@gmail.com';

// $texto = <<<LABEL 
// Olá eu sou $cliente.
// aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
// dddddddddddddddddddddddddddddddddddddddddddd meu email $email
// obrigado pela simpatia.
// LABEL;

// echo $texto;

$frase = 'I\'m going to Jonh\' Party';
echo '<hr>';
echo $frase;

echo '<hr>';
echo $frase[0];

echo '<hr>';

$a = ($a == $b);
var_dump($a);

echo '<hr>';

echo strlen($frase);

echo '<hr>';

function c($s, $q, $c = '...') {

    echo trim(substr($s, 0, $q)).$c; 

}

c($frase, 10);

echo '<hr>';

echo str_replace('o', 'p', $frase);

echo '<hr>';

echo strpos($frase, 'o');