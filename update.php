<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'certificate');
?>
 <?php
 	  
$id = mysqli_real_escape_string($conn, $_POST['id']);
$prefix=$_POST['prefix'];
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$courses=$_POST['courses'];
$duration=$_POST['duration'];
		
	  $name= "UPDATE apply SET prefix='$prefix',name='$name', username='$username', email='$phoneno', courses='$courses', duration='$duration'  WHERE id='$id' ";
	  $result = mysqli_query($conn,$name);
	  echo '<script type="text/JavaScript"> 
	  if(alert("Successfully updated")){}
   else    window.location.assign("adminsecondpage.php"); 
	   </script>'
   ;
	 ?>