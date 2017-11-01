<?php
if(isset($_GET['str'])){
$get=$_GET['str'];
switch($get){
	case controller:
	header("Location:controller.php");
	break;
	case empty($get):
	echo "NO DYNAMIC INFO";
	break;
	default:
	echo "NO EXIST CONTROLLER";
	break;
	
	}
}
echo"<br>";
echo "BY YOUR ACTIONS YOU'RE CHOOSING CONTROLLER";
echo "<br>";
?>
<html>
<head>
</head>
<body>
<form action="" method="GET">
<input type="login"  name="str"/>
<input type="submit" name="submit">
</form>
</body>
</html>