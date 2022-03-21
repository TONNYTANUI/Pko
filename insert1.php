<?php
require_once('connect.php');
$Name = $_POST['Name'];
$E_mail = $_POST['E_mail'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$Message = $_POST['Message'];



$sql = "INSERT INTO feedback_info (Name, E_mail, number, subject, Message) 
      VALUES ('$Name', '$E_mail', '$number', '$subject', '$Message')";
if(mysqli_query($dbconnect, $sql)){
header('location:submission.php');
    exit(0);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnect);
}
 // Close connection
mysqli_close($dbconnect);
?>