<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'certificate');

$id=$_REQUEST['id'];
   $sql = "DELETE FROM apply WHERE id='$id'";

if(mysqli_query($conn, $sql))
 {
   include 'adminsecondpage.php';
 } 
 else
 {
   echo "Deleted  unsuccessfull\n";
 }
 mysqli_close($conn);
?>