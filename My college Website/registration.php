<?php 
session_start();
header("Location:'https://localhost/xampp/server/web/'");
$con=mysqli_connect("localhost","root");
if($con){
    echo"Thankyou For SignIN";
}
else{
    echo"not";
}
mysqli_select_db($con,"session");
$email1=$_POST['email1'];
$password=$_POST['password1'];
$password1=$_POST['password2'];
$name=$_POST['name'];
$q="select * from users where name='$name' && email='$email1' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if(num==1){
    echo"duplicate data";
}
else{
    $qy="insert into users(email,name,password) values('$email1','$name','$password')";
    mysqli_query($con,$qy);
}

?>