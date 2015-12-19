<?php
include('db.php');
if(isset($_POST['add'])){
// we are assigning values to the variables
$a = $_POST['id'];
$b = $_POST['descripting'];
// the next step is to apply inserting command
$sql = "INSERT INTO subjects(id,description) VALUES('$a','$b')";
$result = mysql_query($sql);
if(mysql_query($sql))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='listing.php';
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
<title>The Course units page</title>
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
    <label>THE LIST OF COURSES UNITS OFFERED</label>
    </div>
</div>
<div id="body">
 <div id="content">
 <a href="listing.php"><button class="style1">back to view page</button></a><br />
 <a href="home.php"><button class="style1">back to home page</button></a>
<form action="" method="post">
<table>
<tr>
<td>Course description</td>
<td><input type="text" name="descripting" value="" /><input type="hidden" name="id" value="" /></td>
</tr>
<tr>
<td><center><button type="submit" name="add"><strong>Add</strong></button></center></td>
<td><button type="submit" name="reset"><strong>Reset</strong></button></td>
</tr>
</table>
</form>
</div>
</div>
</center>
</body>
</html>