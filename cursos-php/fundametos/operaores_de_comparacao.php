<?php

#Valores iguais?
$a = (2 == 3); #false;
$a = (100 == 100); #true;
$a = (50 == '50'); #true;
$a = (50 === '50'); #false;

#Valores diferentes?
$a = (2 != 3); #true;
$a = (100 <> 100); #false;
$a = (50 != '50'); #false;
$a = (50 !== '50'); #true;

#Valores são maiores ou menores?
$a = (2 < 3); #true;
$a = (100 >= 100); #true;
$a = (50 > 50); #false;
$a = (50 >= 50); #true;