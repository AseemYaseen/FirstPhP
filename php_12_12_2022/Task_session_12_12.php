<?php
session_start();
echo $_SESSION["theTable"];
echo "<br>";
echo $_SESSION["theLastChange"];
echo "<br>";
echo $_SESSION["theLines"];