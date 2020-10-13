
<?php
include_once("../dbConnection.php");
if(!isset($_SESSION))
{
    session_start();
}


if(isset($_SESSION['is_login'])){
    $stuLogEmail = $_SESSION['stuLogEmail'];
    } else {
    echo "<script> location.href='../index.php'; </script>";
   }

   if(isset($stuLogEmail)){
   $sql = "SELECT stu_img FROM student WHERE stu_email='$stuLogEmail'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $stu_img = $row['stu_img'];
   }
?> 
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="../css/owl.min.css">
    <link href="css/owl.theme.min.css" type="text/css" rel="../stylesheet">
    <link href="css/testyslider.css" type="text/css" rel="../stylesheet"> 
    <link href="css/style.css" type="text/css" rel="../stylesheet">
    <link href="../css/stustyle.css" type="text/css" rel="../stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>iSchool</title>
    </head>
  <body>
    <!-- Start Navigation -->
        <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="userProfile.php">E-Learning</a>
       </nav>

       <!-- side bar -->
      <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
          <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item mb-3">
                  <img src="<?php echo $stu_img ?>" alt="studentimage" class="img-thumbnail rounded-circle">
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php if(PAGE == 'profile'){echo 'active';} ?>" href="userProfile.php">
                  <i class="fas fa-user"></i>Profile <span class="sr-only">(current)</span>
                 </a> 
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="myCourse.php">
                  <i class="fab fa-accessible-icon"></i>My Courses 
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="stufeedback.php">
                  <i class="fab fa-accessible-icon"></i>Feedback 
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="stuChangePass.php">
                  <i class="fas fa-key"></i>Change Password 
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../logout.php">
                  <i class="fas fa-sign-out-alt"></i>Logout
                  </a>
                </li>
              </ul>
            </div>
          </nav>
       
        