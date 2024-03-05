<?php

#1ª)'a' é igual a 1000 e 'b' é igual a metade de 'a' apresente o valor de 'b'

$a = 1000;
$b = $a / 2;

echo $b;
echo '<hr>';

#2ª)'a' é igual a 100 e 'b' é igual a 3 vezes o valor de 'a' apresente o valor de 'b'

$a = 100;
$b = 3 * $a;

echo $b;
echo '<hr>';

#3ª)'a' é iniciado e apresentado com valor 20.
#na instrção seguinte, 'a' deverá ser apresentado com o valor 21;

echo $a = 20;
echo '<br>';
echo ++$a;
echo '<hr>';

/**
 * 'a' é igual a 100
 * 'b' é igual a 250
 * 'c' é igual a 'a' mais 'b'
 * acrescentar mais unidade a 'c'
 * apresentar 'c'
 */

 $a = 100;
 $b = 250;
 $c = $a + $b;
 echo ++$c;