<?php
session_start();
include_once('model.php');
include_once('view.php');
if(isset($_POST['pushit']) and isset($_POST['string'])){   
	$dynamicstring=$_POST['string'];
	$modelans=model($dynamicstring);
	$kek=$_POST['string'];
	echo "MODEL.PHP saying : ";
	 echo $modelans;
	 $_SESSION['ans']= $kek;
	 $modelanswer= $_SESSION['ans'];
}
echo"<br>";
echo "<br>";
echo"<br>";
echo "<br>";
echo"WRITE DYNAMIC INFORMATION";
?>
<html>
<head>
</head>
<body>
<form action="" method="POST">
<input type="login"  name="string"/>
<input type="submit" name="pushit">
</form>
</body>
</html>
