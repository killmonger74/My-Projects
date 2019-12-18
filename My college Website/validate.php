<?php 
$con=mysqli_connect("localhost","root");

mysqli_select_db($con,"session");
$email1=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name1'];
$q="select * from users where name='$name' && email='$email1' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if(num===1){

  $_SESSION['username']=$email1;
  header("Location:department.php");
}
else{
  header("Location:login.php");
}

?>