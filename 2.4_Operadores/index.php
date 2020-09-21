<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.4 - Operadores');



PHPClassSession('ATRIBUIÇÃO', __LINE__);

$operatorA = 5;
$operators = [
    "a += 5" => ($operatorA += 5),
    "a -= 5" => ($operatorA -= 5),
    "a *= 5" => ($operatorA *= 5),
    "a /= 5" => ($operatorA /= 5),
];
TODO:

var_dump($operators);

PHPClassSession('COMPARAÇÃO', __LINE__);

$incrementA = 5;
$incrementB = 5;
$increment = [
    "pós-incremento" => $incrementA++,
    "res-incremento" => $incrementA,
    "pré-incremento" => ++$incrementA,
    "pós-decremento" => $incrementB--,
    "res-decremento" => $incrementB,
    "pré-decremento" => --$incrementB
];

var_dump($increment);
PHPClassSession('LÓGICOS', __LINE__);


PHPClassSession('ARITMETICOS', __LINE__);