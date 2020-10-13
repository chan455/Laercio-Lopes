<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Constantes');

/*
*
*/
PHPClassSession('', __LINE__);

define("COURSE", "PROGRAMADOR WEB"); // É interpretado durante a execução
const AUTHOR = "GOVERNO FEDERAL"; //é Interpretado antes da execução

$formation = false;

if ($formation) {
    define("COURSE_TYPE", "Formação");
} else {
    define("COURSE_TYPE", "Curso");
}

echo "<p>" . COURSE_TYPE . "" . COURSE . " DO " . AUTHOR . "</p>";
echo "<p> {COURSE_TYPE} {COURSE} DO {AUTHOR} </p>";

class Config
{
    const USER = "root";
    const HOST = "localhost";
}

var_dump(get_defined_constants(true)["user"]);
// var_dump(get_defined_constants(true));

PHPClassName('Constantes_Mágicas');

var_dump([
    __DIR__,
    __FILE__,
    __LINE__,
    __CLASS__
]);