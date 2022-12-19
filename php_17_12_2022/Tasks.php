<?php
function thePrime($n) {
    for($x = 2; $x<$n; $x++)
    {
        if ($n % $x == 0){
           echo "This is not a prime";
        }else{
             echo "This is a prime";
             break;
     }
}
};

thePrime(15);


echo "<br>";
echo "<br>";
echo "<hr>";

function Reverse ($y) {
    $x = strrev($y);
    echo $x;
}

Reverse("Hello");

echo "<br>";
echo "<br>";
echo "<hr>";

function check($Ccheck){
    if ( ctype_lower($Ccheck)  == true){
        echo "Your string is ok";
    }
};

Check("hello");


echo "<br>";
echo "<br>";
echo "<hr>";

$FirstNum = 12;
$SecondNum = 10;
$new = $FirstNum;
$a = $b;
$b = $new;

echo $a;
echo "<br>";
echo $b;

echo "<br>";
echo "<br>";
echo "<hr>";

function Arms($x){
    if (pow($x ,3) == )
}

