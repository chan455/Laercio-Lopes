<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.3 - Variaveis e tipos de dados');

/*
*
*/
PHPClassSession('VARIÁVEIS', __LINE__);

$firstName = "Laércio";
$lastName = "Lopes";

echo "<h3> $firstName $lastName </h3>";


$userEmail = "<p> leon.evil.4@gmail.com</p>";
echo $userEmail;

PHPClassSession('BOLEANO', __LINE__);

//$true = true;
//$false = false;

//var_dump($true, $false);

//$userAge = 52;
//$bestAge = ($userAge > 50);
//var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;
var_dump($a, $b, $c, $d, $e);

if ($a || $b || $c || $d || $e) {
    var_dump(true);
} else {
    var_dump(false);
}
PHPClassSession('CALLBACKS', __LINE__);

$code = "<article><h1> Call Back </h1></article>";

$codeclear = call_user_func("strip_tags", $code);
var_dump($code, $codeclear);

PHPClassSession('OUTROS TIPOS', __LINE__);