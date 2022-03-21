<?php
require_once('connect.php');
$subject_name = $_POST['subject_name'];
$t_fullname = $_POST['t_fullname'];
$t_email = $_POST['t_email'];
$grade = $_POST['grade'];
$time = $_POST['time'];



$sql = "INSERT INTO subjects_info (subject_name, t_fullname, t_email, grade, time) 
      VALUES ('$subject_name', '$t_fullname', '$t_email', '$grade', '$time')";
if(mysqli_query($dbconnect, $sql)){
    echo "<br>1 Extra records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnect);
}
 // Close connection
mysqli_close($dbconnect);
?>