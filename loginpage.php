<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginpage</title>
    
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet">
</head>
<body>



<div class="banner">
    <nav class="navbar  navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://seeklogo.com/images/C/CSC-logo-683D039854-seeklogo.com.png" class="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleitems" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="toggleitems">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link disabled" aria-current="page" href="index.php" ><p class="text-white">HOME</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="about.html" class="text white"><p class="text-white">ABOUT</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="courses.html"><p class="text-white">COURSES</p></a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="logout.php"><p class="text-white">LOGOUT</P></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="contact.html"><p class="text-white">CONTACT US</p></a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-sm btn-outline-danger" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="content">
     
    <h1 class="me-5" style="font-family:Brush Script MT,cursive;font-size:180px">Welcome  <?php  echo $_SESSION['username']; ?></h1>
    </div>
     <div class="container " style="margin-left :580px;">
     <?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'certificate');

$s ="SELECT id,prefix,name,email,phoneno,courses,duration from apply where email='$_SESSION[email]'";
$result= mysqli_query($conn, $s);
$num=mysqli_fetch_array($result,MYSQLI_NUM);

if($num[0]>1)
{
          
  echo "<p style='color:white;font-size:20px;margin-left:-140px;background-color:#dc3545s;border:none;padding:15px 32px;'>You have already applied for certificate.</p><p  style='color:white;font-size:20px;margin-left:-50px;font-family:Times New Roman, Georgia, serif;text-shadow:2px 2px 5px red'>Please contact your admin.</p>";
      
        } 
        else 
        { 
          echo' <button type="button" class="btn btn-outline-danger mt-3  rounded-pill "><a href="applystudent.php" style="text-decoration: none;"><span style=" color: white;  list-style: none;font-family:Brush Script MT,cursive" >Apply Certificate</span></a></button>';
    
        }
?>
       
   
     </div>
     <!-- <div style="margin-left:510px;">
     <a  class="btn btn-danger"  href="preview.php"role="button">Click here to preview your certificate</a>
      </div> -->
    </div>
   
</body>
</html>




 
