<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'certificate');

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];



$s ="SELECT * from register where email='$email' && password='$password' && username='$username'";
$result= mysqli_query($conn, $s);
$num=mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['username']=$username;
    $_SESSION['email']=$email;
   header('location:loginpage.php');
}
else{

 header('location:student login.html');
}
?>