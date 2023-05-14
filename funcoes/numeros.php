<?php

var_dump(abs(-6)); //valor absoluto
var_dump(abs(6));

echo "<br>";

var_dump(round(12.4)); //aredonda o valor
var_dump(round(12.5));

echo "<br>";

var_dump(round(12.6189, 2)); //arredonda o valor com 2 casa decimais

echo "<br>";

var_dump(ceil(14.1)); //arredonda sempre para cima

echo "<br>";

var_dump(floor(14.1)); //arredonda sempre para baixo

echo "<br>";

for ($i = 0; $i < 6; $i++) {
    var_dump(mt_rand(1, 60)); //número randômico no intervalo
}

echo "<br>";

var_dump(pow(3,2)); //calcular a potência

echo "<br>";

var_dump(sqrt(9)); //raiz quadrada