<!DOCTYPE html>
<html lang="en">
<body>
<script>  
function validateform(){  
var name=document.myform.name.value;  
  
  var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
  
  if (name.match(format) || name == "") {
  alert("special character or input is null");
  window.location.href = "/index.php";
  return false;  
}else {  
   
  return true;  
  }  
}  
</script>  
<body>  
  <form name="myform" method="post" action="output.php" onsubmit="return validateform()" >  
search: <input type="text" name="name"><br/>  
<input type="submit" value="register" >  
</form>  
</body>
</html>
