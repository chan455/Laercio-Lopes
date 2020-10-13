<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.9 - Requisição de Arquivos');


PHPClassSession('include, include_once', __LINE__);

// include "file.php";
// echo "<P>CONTINUE</P>";

// include "header.php";

include __DIR__ . "/header.php";

var_dump(__DIR__);

$profile = new stdClass();
$profile->name = "Laércio";
$profile->company = "Prime Informatica";
$profile->Email = "leon.evil.4@gmail.com";
var_dump($profile);

include __DIR__ . "/profile.php";

var_dump(include_once __DIR__ . "/header.php");

$profile = new stdClass();
$profile->name = "Crislane Pereira";
$profile->company = "Prime Informatica";
$profile->Email = "crislanepereira@gmail.com";
var_dump($profile);

include __DIR__ . "/profile.php";


PHPClassSession('require, require_once', __LINE__);

// require "file.php";
// echo "<P>CONTINUE</P>";