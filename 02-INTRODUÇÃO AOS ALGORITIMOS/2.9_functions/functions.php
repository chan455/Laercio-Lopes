<?php

function functionName($arg1, $arg2, $arg3)
{
    $body = [$arg1, $arg2, $arg3];
    return $body;
}

// function calcIMC($weigth, $height)
// {
//     return $weigth / ($height * $height);
// }

function calcIMC_Global()
{
    global $weigth;
    global $height;
    return $weigth / ($height * $height);
}

function payTotal($price)
{
    static $total;
    $total += $price;
    return "<p> O total a pagar é R$" . number_format($total, "2", ",", ".") . "</p>";
}
function myTeam()
{
    $teamName = func_get_args();
    $teamCount = func_num_args();

    return ["members" => $teamName, "count" => $teamCount];
}