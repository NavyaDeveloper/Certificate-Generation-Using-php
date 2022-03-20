
<?php
// session_start();

//  $conn = mysqli_connect('localhost', 'root', '');
// mysqli_select_db($conn,'certificate');


// $prefix=$_POST['prefix'];
// $name=$_POST['name'];
// $username=$_POST['username'];
// $email=$_POST['email'];
// $gender=$_POST['gender'];
// $dob=$_POST['dob'];
// $phoneno=$_POST['phoneno'];
// $courses=$_POST['courses'];
// $doj=$_POST['doj'];
// $duration=$_POST['duration'];
// $photo=$_POST['photo'];
// $signature=$_POST['signature'];


// $sa = "SELECT * from apply where email='$email'";
// $resulta= mysqli_query($conn, $sa)  or die(mysqli_error($link));
// $numa=mysqli_num_rows($resulta);

// if($numa==1)
// {
//     echo '<script type="text/JavaScript"> 
//    if(alert("Username already Applied")){}
// else    window.location=document.referrer; 
//     </script>'
// ;}
// else{
    // $rega =" INSERT Into apply (prefix, name, username , email ,gender,dob, phoneno, courses,doj,duration, photo, signature )values('$prefix', '$name', '$username' , '$email' , '$gender' , '$dob', '$phoneno', '$courses', '$doj', '$duration', '$photo', '$signature' )";
    // $rega =" INSERT Into apply (prefix, name, username , email, gender, dob, phoneno, courses, doj, duration )values('$prefix', '$name', '$username' , '$email' , '$gender' '$dob', '$phoneno', '$courses', '$doj', '$duration' )";
    // mysqli_query($conn,$rega);
//     echo '<script type="text/JavaScript"> 
//    if(alert("Applied successfully")){}
// else    window.location=document.referrer; 
//     </script>'
// ;
// }


if (isset($_POST['Submit'])) {
    if (isset($_POST['prefix']) && isset($_POST['name']) &&
        isset($_POST['username']) && isset($_POST['email']) &&
        isset($_POST['phoneno']) && isset($_POST['courses'])
         && isset($_POST['duration'])) {
        
    
$prefix=$_POST['prefix'];
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$courses=$_POST['courses'];
$duration=$_POST['duration'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "certificate";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM apply WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO apply(prefix, name, username , email, phoneno, courses, duration ) values(?, ?, ?, ?, ?, ?,?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssiss",$prefix, $name, $username , $email , $phoneno, $courses,  $duration);
                if ($stmt->execute()) {
                    echo '<script type="text/JavaScript"> 
    if(alert("Successfully Applied")){}
else    window.location=document.referrer; 
    </script>'
 ;
         
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo '<script type="text/JavaScript"> 
    if(alert("Someone already applied using this email.")){}
 else    window.location=document.referrer; 
     </script>'
 ;
               
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo '<script type="text/JavaScript"> 
        if(alert("All field are required.")){}
     else    window.location=document.referrer; 
         </script>'
     ;
     
        
        die();
    }
}
else {
    echo '<script type="text/JavaScript"> 
    if(alert("Submit button is not set")){}
 else    window.location=document.referrer; 
     </script>'
 ;
  
}

 ?>
