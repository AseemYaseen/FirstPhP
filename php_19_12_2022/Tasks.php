<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["Email"]) && isset($_POST["Password"])){
        echo "This is a POST Method"."<br>";
        echo $_POST['Email']."<br>";
        echo $_POST['Password']."<br>";
    }else{
        echo "This is a Get Method";

    }
    ?>
    <form action="" method="POST">
        <span>Email</span><input type="text" name="Email" value="">
        <span>Password</span><input type="password" name="Password" value="">
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <br>
    <br>


    <form action="" method="POST">
        <span>Page Url :</span><input type="text" name="Website" value="">
        <input type="submit" name="submit" value="GO">
    </form>

    <?php
   if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["Website"])){
   $Url = $_POST["Website"];
   header("Location: $Url");
   exit;
   }
    ?>
    <br>
    <br>
    <br>
    <form action="" method="POST">
        <span>Number 1 :</span><input type="number" name="Number1" value="">
        <span>Number 2 :</span><input type="number" name="Number2" value="">
        <span>Use / or * or + or -</span><input type="text" name="Operation" value="">
        <input type="submit" name="submit" value="GO">
    </form>
    
   <?php
 
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["Number1"])&& isset($_POST["Number2"])&& isset($_POST["Operation"])){

        $firstNum = $_POST['Number1'];
        $secondNum = $_POST['Number2'];
        $operator = $_POST['Operation'];
        switch ($operator) {
        case "+":
        $Result = $firstNum + $secondNum;
        break;
        case "-":
         $Result = $firstNum - $secondNum;
        break;
        case "*":
        $Result = $firstNum * $secondNum;
        break;
        case "/":
        $Result = $firstNum / $secondNum;
        default:
           
        } 
    }
    if(!empty($Result)){
    echo "This is the result of your operation  = " . $Result;
    }else{
        echo "";
    }
   ?>
   <br>
   <br>
   <br>
    
    <?php
    echo basename(__FILE__);
    $dirname = pathinfo(__FILE__, PATHINFO_DIRNAME);
    echo $dirname;
    
    ?>

</body>
</html>

