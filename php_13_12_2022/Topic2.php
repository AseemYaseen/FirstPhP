<?php
class Human {
    // Properties
    public $age=20;
    private $name;
  public function newAge(){
        $this->age = $this->age + 5;
        echo "the object has ".$this->age."years old"."<br>";
  }

  function set_namee($name) {
    $this->name = $name;
  }
  function get_namee() {
    return $this->name;
  }
}

$h1=new Human();
$h1->age =22;
// echo $h1->age ."<br>";
$h1->newAge();

$h1->set_namee("ahmad");
echo "Name: " . $h1->get_namee()."<br>";


$h2=new Human();
$h2->age =30;
echo $h2->age."<br>";
$h2->newAge();

$h3=new Human();
$h3->set_namee("Asem");
echo "Name: " . $h3->get_namee()."<br>";

?>