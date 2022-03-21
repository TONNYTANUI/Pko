<?php
require_once('connect.php');
$t_name = $_POST['t_name'];
$t_username = $_POST['t_username'];
$b_salary = $_POST['b_salary'];
$t_allowances = $_POST['t_allowances'];
$t_salary = $_POST['t_salary'];
$d1 = $_POST['d1'];
$d1_reason = $_POST['d1_reason'];
$d1_date = $_POST['d1_date'];
$d2 = $_POST['d2'];
$d2_reason = $_POST['d2_reason'];
$d2_date = $_POST['d2_date'];
$d3 = $_POST['d3'];
$d3_reason = $_POST['d3_reason'];
$d3_date = $_POST['d3_date'];



$sql = "INSERT INTO teacher_salary (t_name, t_username, b_salary, t_allowances, t_salary, d1,d1_reason , d1_date, d2, d2_reason, d2_date , d3, d3_reason, d3_date) 
      VALUES ('$t_name', '$t_username', '$b_salary', '$t_allowances', '$t_salary', '$d1','$d1_reason', '$d1_date', '$d2', '$d2_reason', '$d2_date' , '$d3', '$d3_reason', '$d3_date')";
if(mysqli_query($dbconnect, $sql)){
    echo "<br>1 Extra records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnect);
}
 // Close connection
mysqli_close($dbconnect);
?>
