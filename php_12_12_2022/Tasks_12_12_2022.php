<?php
session_start();

echo "<br>";
echo "<br>";
$a = 1000;
$b = 1200;
$c = 1400;
$table = <<<Table
<table border=2>
<tr>
<td>Salary of Mr. A <td>$a$</td></td>
</tr>
<tr>
<td>Salary of Mr. B <td>$b$</td></td>
</tr>
<tr>
<td>Salary of Mr. C <td>$c$</td></td>
</tr>
</table>
Table;
echo $table;
$_SESSION["theTable"] = $table;
echo "<br>";
echo "_______________________________________________________";
echo "<br>";
// echo filemtime("../index.php");
echo "<br>";
$lastChange =  "Content last changed: ".date("F d Y H:i:s.", filemtime("../index.php"));
$_SESSION["theLastChange"] = $lastChange;
echo $lastChange;
echo "<br>";
echo "_______________________________________________________";
echo "<br>";


$lines = count(file(__FILE__));
$_SESSION["theLines"] = $lines;
echo $lines;

?>