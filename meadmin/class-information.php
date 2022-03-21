<!DOCTYPE html>
<html>
<head>
  <title>Classinformation</title>
  <link rel="stylesheet" type="text/css" href="t_salary.css">
</head>
<body>
  <div id="fm"> 
<form action='insert7.php' method='post'>
<div id="title">CLASS INFORMATION</div><br>
<div class="algtable">
     <label>Teacher Name:</label>
     <input type="text" name="t_fullname" placeholder="TeacherName"><br><br>
     <label>Subject:</label>
     <select name="subject_name" id="subject_name">
   <option value="--">--</option>
   <option value="maths">Maths</option>
   <option value="english">English</option>
   <option value="kiswahili">Kiswahili</option>
   <option value="social studies">Social studies</option>
   <option value="science">Science</option>
   <option value="cre">Cre</option>
    </select><br>
     <label>  Teacher's Email:</label>
     <input type="text" id="user" name="t_email" placeholder="t_email"><br><br>
     <label>Grade:</label>
   <select name="grade" id="grade">
   <option value="1">Grade 1</option>
   <option value="2">Grade 2</option>
   <option value="3">Grade 3</option>
   <option value="4">Grade 4</option>
   <option value="5">Grade 5</option>
   <option value="6">Grade 6</option>
   <option value="7">Grade 7</option>
</select><br>
     <label>Time:</label>
     <input type="text" id="user" name="time" placeholder="Time"><br><br>
<input type="submit" name="submit" value="SUBMIT DATA"/>  
</div>    
</form>
</div>
</body>
</html>