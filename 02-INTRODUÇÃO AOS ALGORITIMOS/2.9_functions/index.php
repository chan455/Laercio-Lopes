<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10 - Trabalhando as Functions');

require __DIR__ . '/functions.php';

PHPClassSession('functions', __LINE__);

var_dump(functionName("ifto", "novos caminhos", 'Programador WEB'));
var_dump(functionName("Crislane", "Anthony", 'Maria'));

// var_dump(calcIMC(80, 1.66));

PHPClassSession("global access", __LINE__);

$weight = 91;
$height = 1.90;

var_dump(calcIMC_Global());

PHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

var_dump($pay);

PHPClassSession('dinamic arguments', __LINE__);

var_dump(myTeam());
var_dump(myTeam("Crislane", "Maria"));
var_dump(myTeam("Maria Sophia", "Anthony"));
var_dump(myTeam("Anthony", "Crislane"));