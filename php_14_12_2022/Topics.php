<?php

class myclass {

    var $var1; // this has no default value...
    var $var2 = "xyz";
    var $var3 = 100;
    private $var4;

    // constructor
    function __construct() {
        // change some properties
        $this->var1 = "foo";
        $this->var2 = "bar";
        return true;
    }

}

$my_class = new myclass();

$class_vars = get_class_vars(get_class($my_class));

foreach ($class_vars as $name => $value) {
    echo "$name : $value\n";
}
echo "<br>";
echo"<hr>";
echo "<br>";

?>

<?php

class foo {
    static public function test() {
        var_dump(get_called_class());
    }
}

class bar extends foo {
}

foo::test();
echo "<br>";
bar::test();



echo "<br>";
echo"<hr>";
echo "<br>";



//define classone
class classone { }

//define classtwo
class classtwo { }

//This will show X classes (built-ins, extensions etc) with
//classone and classtwo as the last two elements


//define classthree
class classthree { }

//...and four
class classfour { }

//Shows the same result as before with class three and four appended
echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";

echo "<br>";
echo"<hr>";
echo "<br>";


class Dad {
    function __construct()
    {
    // implements some logic
    }
}

class Child extends Dad {
    function __construct()
    {
        echo "I'm " , get_parent_class($this) , "'s son";
        echo "<br>";
    }
}

class Child2 extends Dad {
    function __construct()
    {
        echo "I'm " , get_parent_class('child2') , "'s son too";
    }
}

$foo = new child();
$bar = new child2();

?>



