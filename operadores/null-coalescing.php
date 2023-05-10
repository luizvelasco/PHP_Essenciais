<?php

$valor = [
    "php" => 7.2,
    "dart" => 2,
    "c#" => 9
];

// if (isset($valor["c#"])) {
//     echo $valor["c#"];
// } else {
//     echo "Curso de C# não encontrado";
// }

// $cSharp = isset($valor["c#"]) ? $valor["c#"] : "Curso de C# não encontrado";

$cSharp = $valor["c#"] ?? "Curso de C# não encontrado";

echo $cSharp;