<?php

// Task1
$color = ["red", "green", "white"];

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0] carpet, the $color[1] lawn, the $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo "<br>";
echo "<br>";
echo "<hr>";

// Task2

echo '<ul>';
echo '<li>' . implode( '</li><li>', $color). '</li>';
echo '</ul>';

echo "<br>";
echo "<br>";
echo "<hr>";

//Task3

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

foreach($cities as $TheCountry=> $TheCapital)
{
echo "The capital of $TheCountry is $TheCapital"."<br>";

}

//Task4

echo "<br>";
echo "<br>";
echo "<hr>";


$color1 = array (4 => 'white', 6 => 'green', 11=> 'red');

echo $color1[4];

echo "<br>";
echo "<br>";
echo "<hr>";

//Task5

$New1 = ["1", "2", "3", "4", "5"];

array_splice($New1, 3, 0, "$");
echo implode($New1);

echo "<br>";
echo "<br>";
echo "<hr>";

//Task6

$fruits =["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
asort($fruits);

foreach($fruits as $Thefruits => $TheE)
{
echo "$Thefruits = $TheE"."<br>";

}

//Task7

echo "<br>";
echo "<br>";
echo "<hr>";

$arrX = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

sort($arrX);

print_r($arrX);

echo "<br>";
echo "<br>";
echo "<hr>";

//Task8

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$NewArray2 = array_merge($array1, $array2);
echo "<pre>";
print_r($NewArray2);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<hr>";

//Task9

$colors2 = array("red","blue", "white","yellow");
$fli = array_flip($colors2);
$aaa = array_change_key_case($fli, CASE_UPPER);
echo "<pre>";
print_r($aaa);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<hr>";

//Task10

$colors3 = array("RED","BLUE", "WHITE","YELLOW");
// $newColors3 = [];
// foreach ($colors3 as $value){
//     $value = strtolower($value);
//     array_push($colors3 , $value);
//     echo "<br>";
//     print_r($colors3);
//     echo "</br>";
// }
$fliLower = array_flip($colors3);
$bbb = array_change_key_case($fliLower, CASE_LOWER);
echo "<pre>";
print_r($bbb);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<hr>";

//Task11

 echo implode(",",range(200,250,4))."\n";

echo "<br>";
echo "<br>";
echo "<hr>";


//Task12

$words =  array("abcd","abc","de","hjjj","g","wer");
$newArray = array_map('strlen', $words);
echo "The shortest array length is ".min($newArray)." , The longest array length is ".max($newArray);

echo "<br>";
echo "<br>";
echo "<hr>";

//Task13f

$number = range(11,20);
shuffle($number);
for ($i=0; $i<10; $i++){
    echo $number[$i]."/";
}
