<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet">


    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
  <div class="banners" >
  <header>
        <nav class="navbar  navbar-expand-lg navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="https://seeklogo.com/images/C/CSC-logo-683D039854-seeklogo.com.png" class="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleitems" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="toggleitems">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-current="page" href="index.html" ><p class="text-white">HOME</p></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="about.html" class="text white"><p class="text-white">ABOUT</p></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="courses.html"><p class="text-white">COURSES</p></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="user login.php"><p class="text-white">ADMIN LOGOUT</p></a>
                  </li>
                 
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="contact.html"><p class="text-white">CONTACT US</p></a>
                  </li> -->
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-sm btn-outline-danger" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </header>

        <div class="loginpage  mx-auto ">
          <table class="table table-striped table-light table-hover" >
              <tr>
                  <td>Id</td>
                  <td>Prefix</td>
                  <td>Student Name</td>
                  <td>Email</td>
                  <td>Phone Number</td>
                  <td>Course</td>
                  <td>Duration</td>
                  <td>Edit/Update</td>
                  <td><span  class="ms-3">  Delete</span></td>
                  <td>   Make <br>Certificate</td>
                  
</tr>
<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'certificate');



$s ="SELECT id,prefix,name,email,phoneno,courses,duration from apply order by id ASC ";
$result= mysqli_query($conn, $s);
$num=mysqli_num_rows($result);

if($num>0)
{
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["prefix"] . "</td><td>" . $row["name"]. "</td><td>". $row["email"] . "</td><td>". $row["phoneno"]."</td><td>". $row["courses"]."</td><td>". $row["duration"]. " <td><a href=\"edit.php?id=$row[id]\"><input type='submit' value='     edit     ' name='edit'></a></td>". " <td><a href=\"delete.php?id=$row[id]\"><input type='submit' value='     delete     ' name='delete'></a></td>" . " <td><a href=\"make.php?id=$row[id]\"><input type='submit' value='   Make   ' name='make'></a></td>";
        }
        echo "</table>";
        } 
        else 
        { 
            echo "0 results";
         }
// }
// else{

//  header('location:adminlogin.php');
// }
?>

         
        </div>
        </div>
        </body>
        </html>