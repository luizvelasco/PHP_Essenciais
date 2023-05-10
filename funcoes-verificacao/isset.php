<?php

$valor = [
    "php" => 7.2,
    "dart" => 2,
    "c#" => 9
];

if (isset($valor["c#"])) {
    echo $valor["c#"];
} else {
    echo "Curso de C# não encontrado";
}
// var_dump(isset($valor["c#"]));