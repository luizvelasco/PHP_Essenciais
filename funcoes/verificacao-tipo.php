<?php

var_dump(is_int(123));// true
var_dump(is_int("123"));// false

echo "<br>";

var_dump(is_float(123.00));// true
var_dump(is_float("123.00"));// false

echo "<br>";

var_dump(is_numeric(123));// true
var_dump(is_numeric("123"));// true
var_dump(is_numeric("123.00"));// true
var_dump(is_numeric(123.00));// true

echo "<br>";

var_dump(is_string("123.00"));// true
var_dump(is_bool(true));// true

echo "<br>";

var_dump(is_scalar("string"));// true
var_dump(is_scalar([1,2,3]));// false

echo "<br>";

var_dump(gettype("asdjklas"));// string
var_dump(gettype(123456));// string