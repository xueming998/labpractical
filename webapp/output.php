<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Result</h2>
<?php 

$s = $_POST['name'];

print ("<h1>" . $s . " is the searh term</h1><br>");

?>
<form method="post" action="index.php"> 
	
  <input type="submit" name="submit" value="Back">  
</form>
</body>

</html>