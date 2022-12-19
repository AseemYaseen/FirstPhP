<?php
class class1 {
    public function __construct(){

echo "MyClass class has initialized!";
}
}


new class1;

//////////////////////////////////////////////
echo "<br>";
echo "<br>";
echo "<hr>";

class class2 {
    public $message = "Hello all , iam";
    public function hello($name){
        return $this->message.$name;
    }
}

$messageClass = New class2();
echo $messageClass->hello("Asem");


//////////////////////////////////////////////
echo "<br>";
echo "<br>";
echo "<hr>";

class class3{
    public function __construct ($Num1){

        // for ($i = 1; $i<=$Num1; $i++){
        //   $Num1*= $i;
        //   echo $Num1;
        // }
        for($i=1; $i<=5;$i++){
            $result=  $Num1*= $i;
            echo " I is $i";
            echo "<br>";
            echo "Num is $Num1";
            echo "<br>";
            echo $result;
            echo "<br>";

        }


    }

}

$let = New class3(5);

echo "<br>";
echo "<br>";
echo "<hr>"; 
$th2 = $th1 - $th2;
$th1 = $th1 - $th2;
echo $th1."<br>";
echo $th2;




