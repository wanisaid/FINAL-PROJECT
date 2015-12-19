<?php
include('db.php');
// calling items from the database
if(isset($_GET['edit_id'])){
$sql = "SELECT * FROM grading_tbl WHERE id='{$_GET['edit_id']}'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
}

if(isset($_POST['update'])){
// Assigning the variables
$a = $_POST['id'];
$b = $_POST['reg'];
$c = $_POST['test'];
$d = $_POST['course'];
$e = $_POST['final'];
$f = $_POST['marks'];
$g = $_POST['grading'];
$h = $_POST['unit'];
//the next is the updating command or code
$sql = "UPDATE grading_tbl SET id='$a',Reg_no='$b',Tests='$c',coursework='$d',final_exam='$e',total_marks='$f',grades='$g',course_unit='$h' WHERE id = '{$_GET['edit_id']}'";
$query = mysql_query($sql);
if(mysql_query($sql))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='view.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
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
</head>
<body>
<center>
<div id="header">
 <div id="content">
    <label>Welcome To The Grading Page</label>
    </div>
</div>
<form action="" method="post">
<table>
<tr>
<td>Fill The Following Form To input Data</td>
<td></td>
</tr>
<tr>
<td>Registration No.</td>
<td><input type="text" name="reg" value="<?php echo $row['Reg_no'];?>"/><input type="hidden" name="id" value="<?php echo $row['id'];?>" /></td>
</tr>
<tr>
<td>Test Results</td>
<td><input type="text" name="test" value="<?php echo $row['Tests'];?>"/></td>
</tr>
<tr>
<td>CourseWork Results</td>
<td><input type="text" name="course" value="<?php echo $row['coursework'];?>"/></td>
</tr>
<tr>
<td>Final Exams</td>
<td><input type="text" name="final" value="<?php echo $row['final_exam'];?>"/></td>
</tr>
<tr>
<td>Total Marks</td>
<td><input type="text" name="marks" value="<?php echo $row['total_marks'];?>"/></td>
</tr>
<tr>
<td>GRADES</td>
<td><input type="text" name="grading" value="<?php echo $row['grades'];?>"/></td>
</tr>
<tr>
<td>Course Unit</td>
<td><input type="text" name="unit" value="<?php echo $row['course_unit'];?>"/></td>
</tr>
<tr>
<td><center><button type="submit" name="update"><strong>Update</strong></button></center></td>
<td><button type="submit" name="reset"><strong>Cancel</strong></button></td>
</tr>
</table>
</form>
 </div>
</div>
</center>
</body>
</html>