
<?php

if(!isset($_SESSION))
{
    session_start();
}
include_once("../dbConnection.php");
include("./stuInclude/header.php");


if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stuLogEmail'];
    } else {
    echo "<script> location.href='../index.php'; </script>";
   }

  
   $sql = "SELECT * FROM student WHERE stu_email='$stuEmail'";
   $result = $conn->query($sql);
   if($result->num_rows == 1){
   $row = $result->fetch_assoc();
   $stuId = $row['stu_id'];
   }

   if(isset($_REQUEST['submitFeedbackBtn']))
   {
       if(($_REQUEST['f_content']== ""))
       {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
       } 
       else 
       {
           $fcontent = $_REQUEST['f_content'];
           $sql = "INSERT INTO feedback (f_content, stu_id) VALUES ('$fcontent', '$stuId')";
           if($conn->query($sql) == TRUE)
           {
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Submitted Successfully </div>';

           }
           else 
           {
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Submit </div>';
           }
       }
      
    }
   
   
?> 

<div class="col-sm-6 mt-5">
    <form method="POST" enctype="multipart/form-data" class="mx-5">
        <div class="form-group">
            
        </div>
    </form>
</div>