<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'certificate');

$id = $_GET['id']; // get id through query string

$name= "SELECT * FROM apply  WHERE id =  '$id' ";
$result = mysqli_query($conn,$name);

while($row = mysqli_fetch_array($result)) { 

?>


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



<div class="banner" >
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
                <a class="nav-link disabled" href="about.html" class="text white"><p class="text-white" >ABOUT</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="courses.html"><p class="text-white" >COURSES</p></a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="logout.php"><p class="text-white">LOGOUT</P></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="contact.html"><p class="text-white" >CONTACT US</p></a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-sm btn-outline-danger" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    


      <div class="mx-auto p-0 " style="width:50%">
                
            <div class="row justify-content-center">
                <div class="col-1">
   
                </div>
                <div class="col-10">
                   <div class="card mb-5 mt-5" >
                       <h4 class="card-title p-2 text-center bg-danger text-white">Registration Form</h4>
                           <div class="card-body">
                                 <form  class="row g-3" action="update.php" method="post">

                             
           
                                 <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                 

                                 <div class="mb-2 col-md-4">
                                
       <label for="prefix" class="form-label">Prefix</label>
       <select class="form-select" aria-label="Default select example" id="prefix" name="prefix" required>
       <option value="<?php echo $row['prefix']; ?>"><?php echo $row['prefix']; ?></option>
  <option value="Mr.">Mr.</option>
  <option value="Ms.">Ms.</option>
  <option value="Mrs.">Mrs.</option>
</select>
   </div>
   <div class="mb-2 col-md-8">
       <label for="name" class="form-label">Name <small class="text-muted" >(capital letters)</small></label>
       <input type="text" id="name" class="form-control" name="name"  value="<?php echo $row['name']; ?>" required> 
   </div>
   
   
       <div class="mb-2 col-md-6">
           <label for="username" class="form-label">User Name</label>
           <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['username']; ?>" required> 
       </div>
   
       
           <div class="mb-2 col-md-6">
               <label for="email" class="form-label">Email</label>
               <input type="email" id="email" class="form-control" name="email"  value="<?php echo $row['email']; ?>" required > 
           </div>
   
<!--    
           
           <div class="mb-2 col-md-4">
               <label for="gender" class="form-label">Gender</label><br>
               <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="gender" id="1" value="m">
                   <label class="form-check-label" for="1">
                   Male
                   </label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="gender" id="2"  value="f">
                   <label class="form-check-label" for="2">
                  Female
                   </label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="gender" id="3" value="o">
                   <label class="form-check-label" for="3">
               Other
                   </label>
               </div>
        </div> -->

        <!-- <div class="mb-2 col-md-4">
           <label for="dob" class="form-label">Date Of Birth</label>
           <input type="date" id="dob" class="form-control" name="dob" > 
       </div> -->
        <div class="mb-2 col-md-4">
           <label for="Number" class="form-label">Phone Number</label>
           <input type="text" id="phoneno" class="form-control" name="phoneno"  value="<?php echo $row['phoneno']; ?>"required > 
       </div>
       <div class="mb-2 col-md-4">
       <label for="courses" class="form-label">Courses</label>
       <select class="form-select" aria-label="Default select example" id="courses" name="courses"  required>

  <option value="<?php echo $row['courses']; ?>"><?php echo $row['courses']; ?></option>
  <option value="HDCP">HDCP</option>
  <option value="HDCA">HDCA</option>
  <option value="DCA">DCA</option>
  <option value="TALLY">TALLY</option>
  <option value="MICROSOFT EXCEL">MICROSOFT EXCEL</option>
  <option value="ADVANCE JAVA">ADVANCE JAVA</option>
</select>
</div>

<!-- <div class="mb-2 col-md-4">
           <label for="doj" class="form-label">Date Of Join</label>
           <input type="date" id="doj" class="form-control" name="doj" > 
       </div> -->

<div class="mb-2 col-md-4">
       <label for="courses" class="form-label">Duration</label>
       <select class="form-select" aria-label="Default select example" id="duration"  name="duration" required>
       <option value="<?php echo $row['duration']; ?>"><?php echo $row['duration']; ?></option>
  <option value="1 YEAR">1 year</option>
  <option value="6 MONTHS">6 months</option>
  <option value="3 MONTHS">3 months</option>
  <option value="1 MONTH">1 month</option>

</select>
</div><br>



<!-- <div class="col-md-4">
   <label for="file">Choose photo to upload</label>
   <input type="file" id="photo" name="photo" multiple >
 </div><br>

 <div class="col-md-4">
   <label for="file">Choose Signature to upload</label>
   <input type="file" id="signature" name="signature" multiple>
 </div> -->

   <div class="mt-3 gap-3 mb-2 d-md-flex justify-content-md-center">
  
       <input class="btn btn-danger" type="submit" value="Update" name="Submit">
       <input class="btn btn-danger" type="reset" value="Reset">
   </div>
      
     </form>
     <?php
	 				}
                  
				  ?>
                        </div>
                        
                       </div>
               </div>
                  
                         <div class="col-1">
   
                         </div>
            </div>
          </div>
 </div>
    </div>
   
</body>
</html>




 

