
<?php
session_start();
// header('location:student login.html');
$conn =mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'certificate');

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];


$s ="SELECT * from register where email='$email'";
$result= mysqli_query($conn, $s);
$num=mysqli_num_rows($result);

if($num==1)
{
    echo '<script type="text/JavaScript"> 
   if(alert("Username already registered")){}
else    window.location=document.referrer; 
    </script>'
;



}
else{
    $reg=" INSERT Into register (username , email ,password, password2 )values('$username','$email','$password','$password2')";
    mysqli_query($conn,$reg);
    echo '<script type="text/JavaScript"> 
   if(alert("Registered successfully")){}
else    window.location=document.referrer; 
    </script>'
;
}
 ?>
