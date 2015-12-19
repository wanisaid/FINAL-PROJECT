<?php
include('db.php');
// the deleting code 
if(isset($_GET['delete'])){
$sql = "DELETE FROM grading_tbl WHERE id = '{$_GET['delete']}'";
$query = mysql_query($sql);
if(!$query){
  echo "it cannot delete from the database";
}else{
 //success
}
}
if(isset($_POST['add'])){
// we are assigning values to the variables
$a = $_POST['id'];
$b = $_POST['reg'];
$c = $_POST['test'];
$d = $_POST['course'];
$e = $_POST['final'];
$f = $_POST['marks'];
$g = $_POST['unit'];

// the next step is to apply inserting command
$sql = "INSERT INTO grading_tbl(id,Reg_no,Tests,coursework,final_exam,total_marks,course_unit) VALUES('$a','$b','$c','$d','$e','$f','$g')";
$result = mysql_query($sql);
if(mysql_query($sql))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='view.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<html>
<head>
<title>The grading page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color:#FF3300;
}

-->
</style>
</head>
<body>
<center>
<div id="header">
 <div id="content">
    <label>Welcome To The Grading Page</label>
  </div>
</div>
<div id="body">
 <div id="content">
<a href="view.php"><button class="style1">back to view page</button></a><br />
<a href="home.php"><button class="style1">back to home page</button></a>
<form action="" method="post">
<table>
<tr>
<td>Fill The Following Form To input Data</td>
<td></td>
</tr>
<tr>
<td>Registration No.</td>
<td><input type="text" name="reg" value=""/><input type="hidden" name="id" /></td>
</tr>
<tr>
<td>Test Results</td>
<td><input type="text" name="test" value=""/></td>
</tr>
<tr>
<td>CourseWork Results</td>
<td><input type="text" name="course" value=""/></td>
</tr>
<tr>
<td>Final Exams</td>
<td><input type="text" name="final" value=""/></td>
</tr>
<tr>
<td>Total Marks</td>
<td><input type="text" name="marks" value=""/></td>
</tr>
<tr>
<td>Course Unit</td>
<td><input type="text" name="unit" value=""/></td>
</tr>
<tr>
<td><center><button type="submit" name="add"><strong>Add</strong></button></center></td>
<td><button type="reset" name="reset"><strong>Reset</strong></button></td>
</tr>
</table>
</form>
 </div>
</div>
</center>
</body>
</html>