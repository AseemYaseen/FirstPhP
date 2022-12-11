<?php
//Task1
echo phpversion();

echo '<br>';
echo '<br>';
echo '<br>';

//Task2
echo nl2br (
    "Tomorrow I 'll learn PHP global variables.'
'This is a bad command: del c:."
);
echo '<br>';
echo '<br>';

?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    echo $_POST ["username"];

}

?>

<form action="" method="post">
    <input type='text' name="username"></input>
    <input type="submit" value="send">
</form>


    <?php
    echo "<---------------------------------->";
    echo '<br>';
    echo '<br>';
    echo $_SERVER["REMOTE_ADDR"];
    echo '<br>';
    echo '<br>';
    echo $_SERVER["SCRIPT_FILENAME"];
    echo '<br>';
    echo '<br>';
    echo "<---------------------------------->";
    echo '<br>';
    $url = "https://www.w3schools.com/php/default.asp.";
    $url=parse_url($url);
    echo 'Scheme : '.$url['scheme'];
    echo '<br>';
    echo 'Host : '.$url['host'];
    echo '<br>';
    echo 'Path : '.$url['path'];
?>

<?php
 echo '<br>';
 echo '<br>';
 echo "<---------------------------------->";
 echo '<br>';
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
?>

<?php 
echo '<br>';
echo '<br>';
echo "<---------------------------------->";
echo '<br>';

echo '<form method="POST" action="https://www.w3schools.com/">
<input type="submit"/>
</form>';

?>

