<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet">
    <script>

</script>
<style>
    #print {
	width: 50px;
    height: 30px;
    font-size: 18px;
    background: red;
    border-radius: 4px;
	margin-left:8px;
	cursor:hand;
}

/* .print-container{
   position:absolute;
}  */
.cer{
position:absolute;
width:800px;
 height:600px;
  padding:0px;
   text-align:center; 
       background-repeat: no-repeat;
       background-size:800px;
       margin-left:220px
}
/* .maincer{
  position:relative;
  margin-left:50px;


}
 */
 @media print{
   
 }
.maincer1{
  position:absolute;
  margin-left:300px;
  margin-top:215px;
  font-size:25px;
  color:#57585c;  
font-family:'font-family:Brush Script MT',cursive;
}
.maincer4{ 
  position:absolute;
  margin-left:695px;
    margin-top:385px;
    font-size:20px;
  font-weight:30px;
  color:#57585c; 
  font-family:'font-family:Brush Script MT',cursive;

}
.maincer3{ 
  position:absolute;
  margin-left:580px;
    margin-top:325px;
  font-size:25px;
  color:#57585c; 
  font-weight:30px;
  font-family:'font-family:Brush Script MT',cursive;

}
.maincer5{ 
  position:absolute;
  margin-left:480px;
    margin-top:380px;
  font-size:25px;
  color:#57585c; 
  font-weight:30px;
  font-family:'font-family:Brush Script MT',cursive;

}
.kutty{
  width: 5%; 
  position:absolute;
  margin-left:879px;
  margin-top:100px;
  font-family:'font-family:Brush Script MT',cursive;


}
.print-container{
  position:relative;
  
}
 
    </style>

</head>

<body>
<div class="banner">
    <nav class="navbar  navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#"><img src="https://seeklogo.com/images/C/CSC-logo-683D039854-seeklogo.com.png" class="logo"></a> -->
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
                <a class="nav-link" href="user login.php"><p class="text-white">ADMIN LOGOUT</p></a>
</li>

            
             
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-sm btn-outline-danger me-3" type="submit">Search</button>
            
            </form>
            <div >
            <button   id="print" onclick="window.print()" media="print">Print</button>
</div>
          </div>
        </div>
      </nav>

<div class="p-3 m-5 print-container">
<div>
<div >
<img src="https://i.pinimg.com/736x/19/6d/2c/196d2cf11e61e94ddf934302ea14cc32.jpg" class="cer">
<img src="https://seeklogo.com/images/C/CSC-logo-683D039854-seeklogo.com.png" class="kutty">
       <!-- <span style="font-size:50px; font-weight:bold;color:black;" class="maincer2">Certificate of Completion</span>
       <br> 
        <span style="font-size:25px; color:black;" class="maincer"><i>This is to certify that</i></span>
       <br> -->
       <span style="font-size:30px" ><b>
       <?php
    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn,'certificate');
    $id = $_GET['id']; 

$name= "SELECT * FROM apply  WHERE id =  '$id' ";
$result = mysqli_query($conn,$name);

while($row = mysqli_fetch_array($result)) { 
   echo "<p class='maincer1'>".$row['name']."</p>"; }?>
</b></span>
       <!-- <span style="font-size:25px;color:black;"class="maincer"><i>has completed the course</i></span> <br/> -->
       <span >
      <?php
    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn,'certificate');
    $id = $_GET['id']; 

$name= "SELECT * FROM apply  WHERE id =  '$id' ";
$result = mysqli_query($conn,$name);

while($row = mysqli_fetch_array($result)) { 
   echo "<p class='maincer3'>".$row['courses']."</p>"; }?></span> 
  <!-- <span style="font-size:25px;color:black;"class="maincer"><i>dated</i></span> <br/>  -->
  <span>
  <?php
    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn,'certificate');
    $id = $_GET['id']; 

$name= "SELECT * FROM apply  WHERE id =  '$id' ";
$result = mysqli_query($conn,$name);

while($row = mysqli_fetch_array($result)) { 
   echo "<p  class='maincer4'>".date("Y/m/d")."</p>"; }?></span> 
<span>
  <?php
    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn,'certificate');
    $id = $_GET['id']; 

$name= "SELECT * FROM apply  WHERE id =  '$id' ";
$result = mysqli_query($conn,$name);

while($row = mysqli_fetch_array($result)) { 
   echo "<p  class='maincer5'>".$row["id"]."</p>"; }?></span> 

</div>
</div>
</div>

<!-- <div class="p-3 m-5 container">
 <img src="images/border.png"style="width:800px; height:600px; padding:20px; text-align:center; position:relative; background-color:white; margin-left:170px">
 <span style="font-size:30px; position:absolute;font-family: 'Rye', cursive; font-weight:bold;color:black;">Certificate</span>
       <br><br> -->
</div>
</body>
</html>
