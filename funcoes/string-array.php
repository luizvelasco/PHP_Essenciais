<?php

$cursos = explode(", ", "PHP, C#, JAVA, Flutter");
var_dump($cursos);

echo "<br>";

$cursosString = implode(" - ", $cursos);
var_dump($cursosString);