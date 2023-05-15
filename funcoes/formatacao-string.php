<?php

$curso = "PHP";
$versao = 7.4;

echo 'Curso de', $curso, ' versao ', $versao;
echo "<br>";
echo 'Curso de'. $curso.  ' versao ' . $versao;
echo "<br>";
echo "Curso de $curso  versão  $versao"; //mais aconselhável
echo "<br>";

$resultado = 'Curso de'. $curso . ' versao ' . $versao;
echo $resultado;
echo "<br>";

$resultado = sprintf("Curso de %s versão %0.1f", $curso, $versao);
echo $resultado;
echo "<br>";

printf("O Curso de %s está na versão %0.1f", $curso, $versao);
echo "<br>";

$entrada = ['PHP', 7.4];
$resultado = vsprintf("Curso de %s versão %0.1f", $entrada);
echo $resultado;
echo "<br>";

vprintf("Curso de %s versão %0.1f", $entrada);