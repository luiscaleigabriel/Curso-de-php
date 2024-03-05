<?php

$nome = 'Luís';
$apelido = 'Gabriel';

echo '<h3>O meu nome é:</h3>';
echo "<h1>O meu nome completo é $nome $apelido </h1>";

echo '<hr>';

$nomeC = $nome.' '.$apelido;
echo "<p> $nomeC </p>";
$caracteres = mb_strlen($nomeC);
echo "<p> O meu nome tem $caracteres caracteres. Sendo $caracteres o calculo total de caracteres do meu nome </p>";