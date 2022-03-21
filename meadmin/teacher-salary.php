<!DOCTYPE html>
<html>
<head>
	<title>salary</title>
	<link rel="stylesheet" type="text/css" href="t_salary.css">
</head>
<body>
<form action='insert6.php' method='post'>
<div id="title">SALARY FOR TEACHERS IN VALLEY VIEW</div><br>
     <label>Basic salary:</label>
     <input type="text" name="b_salary" placeholder="salary"><br><br>
     <label>Total Allowances:</label>
     <input type="text" id="user" name="t_allowances"><br><br>
     <label>Total Salary:</label>
     <input type="text" id="user" name="t_salary"><br><br>
   <div id="title">Deductions</div><br> 
   <form>
   	 <label>Deduction 1:</label>
     <input type="text" name="d1" placeholder="salary"><br><br>
     <label>Reason:</label>
     <input type="text" id="user" name="d1_Reason"><br><br>
     <label>Date:</label>
     <input type="text" name="d1_date" placeholder="salary"><br><br>
     <label>Deduction 2:</label>
     <input type="text" name="d2" placeholder="salary"><br><br>
     <label>Reason:</label>
     <input type="text" id="user" name="d2_Reason"><br><br>
     <label>Date:</label>
     <input type="text" name="d2_date" placeholder="salary"><br><br>
     <label>Deduction 3:</label>
     <input type="text" name="d3" placeholder="salary"><br><br>
     <label>Reason:</label>
     <input type="text" id="user" name="d3_Reason"><br><br>
     <label>Date:</label>
     <input type="text" name="d3_date" placeholder="salary"><br><br>
   </form>

<input type="submit" name="submit" value="SUBMIT DATA"/>      
</form>
</body>
</html>