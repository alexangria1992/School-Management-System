<?php
include_once("../dbConnection.php");

// Checking Email Already Registered
if(isset($_POST['checkemail']) && isset($_POST['stuemail']))
{
    $stuemail = $_POST['stuemail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '".$stuemail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}


if(isset($_POST['stusignup']) && isset($_POST['stupass']))
{
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];
    $sql = "INSERT INTO student(stu_name, stu_email, stu_pass)VALUES('$stuname', '$stuemail', '$stupass')";

    if($conn -> query($sql) == TRUE)
    {
        echo json_encode("OK");
    }
    else 
    {
        echo json_encode("Failed");
    }
}
?>