<?php

//array chunk
$groub1 = ["Asem" ,"Nuqati" ,"Ruba" ,"Maslmani" ,"Tabarak"];

echo '<pre>';
print_r(array_chunk($groub1, 3));
echo '</pre>';

echo "<br>";
echo "<br>";

//array 


$usStates = ["FL" => "Florida","NY" => "New York", "CA" => "California", "HI" => "Hawaii"];
echo "<hr>";
echo '<pre>';
print_r(array_chunk($usStates, 2, True));
echo '</pre>';

echo "<br>";
echo "<br>";
echo "<hr>";

//array

$keys = ["A", "B", "C", "D"];
$value = ["Bmw", "Toyota", "Dodge", "Mercedes"];

echo '<pre>';
print_r(array_combine($keys, $value));
echo '</pre>';

echo "<br>";
echo "<br>";
echo "<hr>";

$newArray = ["a" => "Ahmad" , "s" =>"Salwa" ,"b" =>"Bayan" ,"ba" =>"Baraa" ,"sh" =>"Shoroq"];

print_r(array_change_key_case($newArray,CASE_UPPER));

echo '<pre>';

echo '</pre>';


