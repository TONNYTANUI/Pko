<?php
include "connect.php";
$sql = "SELECT t_name, t_username, b_salary, t_allowances, t_salary, d1,d1_reason , d1_date, d2, d2_reason, d2_date , d3, d3_reason, d3_date FROM teacher_salary";
$result = mysqli_query($dbconnect, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table border='1px'>
  <tr>
  <th>Teacher's name</th>
  <th>Teacher Username</th>
  <th>Basic salary</th>
  <th>Total Allowances</th>
  <th>Total Salary</th>
  <th>Deduction 1</th>
  <th>Reason</th>
  <th>Date</th>
  <th>Deduction 2</th>
  <th>Reason</th>
  <th>Date</th>
  <th>Deduction 3</th>
  <th>Reason</th>
  <th>Date</th>
  </tr>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["t_name"]. "</td><td>". $row["t_username"]."</td><td>" . $row["b_salary"]. "</td><td>". $row['t_allowances']."</td><td>". $row["t_salary"]."</td><td>". $row["d1"]."</td><td>". $row["d1_reason"]."</td><td>". $row["d1_date"]."</td><td>". $row["d2"]."</td><td>". $row["d2_reason"]."</td><td>" .$row["d2_date"]."</td><td>".$row["d3"]."</td><td>".$row["d3_reason"]."</td><td>".$row["d3_date"]."</td></tr>";
    
  }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($dbconnect);
?>