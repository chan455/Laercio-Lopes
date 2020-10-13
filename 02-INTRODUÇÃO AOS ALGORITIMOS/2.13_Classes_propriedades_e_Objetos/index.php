<?php

declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
PHPClassName('2.13 - Classes, propriedades e Objetos');

PHPClassSession('Classes e Objetos', __LINE__);

require_once __DIR__ . "/classes/User.php";

$user1 = new User();
$user2 = new User();
$user3 = new User();
var_dump($user1, $user2, $user3);

PHPClassSession('proriedades', __LINE__);

$user1->setFirstName = "Laércio";
$user1->lastName = "Lopes";
$user1->email = "leon";

var_dump($user1, $user1->getFirstName());

PHPClassSession('métodos', __LINE__);

if (!$user1->setEmail("leon.evil.4@gmai")) {
    echo "<p class='trigger error'> O email {$user1->getEmail()} não é válido !</p>";
}

var_dump($user1);