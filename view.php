<?php
session_start();
echo"HERE IS GENERATED TEMPLATE";
echo "<br>";
$answer=$_SESSION['ans'];
echo " Static content ";
echo "<br>";
echo "Here's dynamic content ";
echo $answer;
echo "<br>";
echo"Static content";
echo"<br>";
echo"<br>";
echo"<br>";
?>