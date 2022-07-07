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
  $fstn=$_POST['firstname'];
  $secn=$_POST['secondname'];
  $em=$_POST['email'];
  $cont=$_POST['contact'];
  $s=$_POST['sex'];
  $cou=$_POST['country'];
  $pass=$_POST['password'];
  $com=$_POST['comments'];
  $con=mysqli_connect("localhost","root","","admissions") or die("Could not connect");
  mysqli_select_db($con,"admissions");
  $que1=mysqli_query($con,"insert into reg values('$fstn', '$secn', '$em', '$cont', '$s', '$cou', '$pass', '$com')");
  if($que1)
  echo"Your details have been submitted successfully"; 
  else
  echo"operation unsuccessful"
  ?>
 </body>
</html>
