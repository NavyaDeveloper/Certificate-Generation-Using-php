<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'certificate');

// $username=$_POST['username'];
// $password=$_POST['password'];
$un=$_POST['username'];
$pa=$_POST['password'];


// $s ="SELECT * from admin where password='navi' && adminname='NAVYA'";
// $result= mysqli_query($conn, $s);
// $num=mysqli_num_rows($result);

if($un=="admin" && $pa=="admin@123")
{
    // session_start();
   header('location:adminsecondpage.php');
}
else{

//  header('location:adminlogin.php');
echo '<script type="text/JavaScript"> 
if(alert("Invalid Username and Password")){}
else    window.location=document.referrer; 
 </script>'
;
}
?>