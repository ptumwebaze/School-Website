<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <?php
  $usernm=$_POST['username'];
  $pass=$_POST['password'];
  $con=mysqli_connect("localhost","root","","libconn") or die("Could not connect");
  mysqli_select_db($con,"libconn");
  $que1=mysqli_query($con,"insert into libsignin values('$usernm', '$pass')");
  if($que1)
  echo"Your details have been submitted successfully"; 
  else
  echo"operation unsuccessful"
  ?>
 </body>
</html>
