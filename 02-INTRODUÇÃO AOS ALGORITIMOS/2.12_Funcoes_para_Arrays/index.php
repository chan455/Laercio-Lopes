<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.11 - Manipulando Vetores');


PHPClassSession('Manipulação', __LINE__);
$index = [
    "FRONT END DEVELOP",
    "BACK END DEVELOP",
    "FULL STACK DEVELOPE",
];

$assoc = [
    "dev1" => "FRONT END DEVELOP",
    "dev2" => "BACK END DEVELOP",
    "dev3" => "FULL STACK DEVELOPE",
];

array_unshift($index, "", "FULL CYCLE DEVELOP");
$assoc = ["dev4" => "FULL CYCLE DEVELOPER"] + $assoc;

array_push($index, "DEVOPS");
$assoc = $assoc + ["dev5" => "FULL CYCLE DEVELOPER"];

// array_shift($index);
// array_shift($assoc);

// array_pop($index);
// array_pop($assoc);

// var_dump($index, $assoc);

PHPClassSession('Ordenação', __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

ksort($index);
ksort($assoc);

sort($index);

var_dump($index, $assoc);

PHPClassSession('Verificação', __LINE__);

var_dump(
    [
        array_keys($assoc),
        array_values($assoc),
    ]
);

if (in_array("FRONT END DEVELOPER", $assoc)) {
    echo "<p> Existe um developer</p>";
}

$arrToStrin = implode(",", $assoc);
echo "<p> Eu sou {$arrToString} !</p>";
echo "<p> {$arrToString}</p>";

var_dump(explode(",", $arrToString));

PHPClassSession('Exemplo Prático', __LINE__);

$profile = [
    "name" => "Chan",
    "company" => "Prime Informática",
    "mail" => "leon.eivl.4@gmail.com"
];

$template = <<<TPL
<article>
    <h1>{{name}}></h1>
    <p>{{company}}<br>
        <a href="mailto{{mail}}"> Enviar Email </a>
    </p>    
</article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile),
    array_values($profile),
    $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile));

var_dump(explode("&", $replaces));

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);